<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'username' => 'required|string', // Validate username instead of email
            'password' => 'required',
        ]);

        // Check credentials using username
        $credentials = $request->only('username', 'password');
        $remember = $request->has('remember'); // Check "Remember Me" option

        // If username is 'abhaymahule', redirect to admin dashboard
        if ($credentials['username'] === 'abhaymahule') {
            if (Auth::attempt(['username' => $credentials['username'], 'password' => $credentials['password']], $remember)) {
                // Successful login for admin
                return redirect(route("admin.dashboard"))->with('success', 'Welcome Admin!');
            }
        }

        // Attempt login
        if (Auth::attempt(['username' => $credentials['username'], 'password' => $credentials['password']], $remember)) {
            // Successful login
            return redirect()->route('dashboard')->with('success', 'You have logged in successfully!');
        }

        // Login failed
        return redirect()->back()->withErrors(['username' => 'Invalid credentials, please try again.']);
    }

    public function logout(Request $request)
    {
        $user = Auth::user(); // Get the currently authenticated user

        if ($user) {
            // Clear the remember_token
            $user->remember_token = null;
            $user->save();
        }

        Auth::logout(); // Log out the user
        $request->session()->invalidate(); // Invalidate the session
        $request->session()->regenerateToken(); // Regenerate the CSRF token

        return redirect(url('login'))->with('success', 'You have been logged out successfully.');
    }

}
