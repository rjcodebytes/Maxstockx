<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User; // Ensure this matches your user model name
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;

class UserController extends Controller
{
    /**
     * Display the signup form.
     */
    public function showSignupForm()
    {
        return view('signup');
    }

    /**
     * Store user data in the database.
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|min:3|confirmed',
            'mobile_number' => 'required|string|digits:10|unique:users,mobile_number', // Added validation for mobile_number
        ]);

        $mobile_number = '+91' . $request->mobile_number;

        // Create a new user
        $user = User::create([
            'name' => $request->name,
            'username' => $request->username, // Save username
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash the password
            'mobile_number' => $mobile_number, // Save mobile number
        ]);

        Mail::to($user->email)->send(new WelcomeMail($user));

        // Redirect or show success message
        return redirect('register')->with('success', 'User registered successfully!');

    }

    public function checkUniqueness(Request $request)
    {
        $field = $request->field;
        $value = $request->value;

        $exists = User::where($field, $value)->exists();

        return response()->json(['unique' => !$exists]);
    }
}
