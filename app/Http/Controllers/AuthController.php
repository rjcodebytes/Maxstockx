<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminOtpMail;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'username' => 'required|string',
            'password' => 'required',
        ]);

        $credentials = $request->only('username', 'password');
        $admin = Admin::where('username', $credentials['username'])->first();

        if ($admin) {
            if (Hash::check($credentials['password'], $admin->password)) {
                // Generate OTP
                $otp = random_int(100000, 999999);

                // Store OTP in session (or in DB if required)
                session(['admin_otp' => $otp, 'admin_id' => $admin->id]);

                // Send OTP email
                Mail::to($admin->email)->send(new AdminOtpMail($otp));

                // Redirect to OTP verification page
                return redirect()->route('admin.verifyOtp')->with('success', 'OTP sent to your email.');
            }

            return redirect()->back()->withErrors(['password' => 'Invalid credentials for admin.']);
        }

        // Normal user login
        if (Auth::attempt($credentials, $request->has('remember'))) {
            return redirect()->route('users.dashboard')->with('success', 'You have logged in successfully!');
        }

        return redirect()->back()->withErrors(['username' => 'Invalid credentials, please try again.']);
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|digits:6',
        ]);

        $otp = session('admin_otp');
        $adminId = session('admin_id');

        if ($request->otp == $otp && $adminId) {
            $admin = Admin::where('id', $adminId)->first(); // Ensure it returns a single instance

            if ($admin) {
                Auth::guard('admin')->login($admin);

                // Clear session OTP
                session()->forget(['admin_otp', 'admin_id']);

                return redirect()->route('admin.dashboard')->with('success', 'Welcome Admin!');
            }
        }

        return redirect()->back()->withErrors(['otp' => 'Invalid OTP, please try again.']);
    }



    public function logout(Request $request)
    {
        if (auth('admin')->check()) {
            // Admin Logout
            $user = auth('admin')->user(); // Get the authenticated admin
            if ($user) {
                $user->remember_token = null; // Clear remember token
                $user->save();
            }
            auth('admin')->logout(); // Log out from admin guard
        } elseif (auth('web')->check()) {
            // User Logout
            $user = auth('web')->user(); // Get the authenticated user
            if ($user) {
                $user->remember_token = null; // Clear remember token
                $user->save();
            }
            auth('web')->logout(); // Log out from user guard
        }

        // Invalidate and regenerate session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(url('login'))->with('success', 'You have been logged out successfully.');
    }



}
