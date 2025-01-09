<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember'); // Check "Remember Me" option

        if (Auth::attempt($credentials, $remember)) {
            // Successful login
            return redirect()->route('dashboard')->with('success', 'You have logged in successfully!');
        }

        // Login failed
        return redirect()->back()->withErrors(['email' => 'Invalid credentials, please try again.']);
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
