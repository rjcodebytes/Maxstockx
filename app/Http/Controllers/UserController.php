<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User; // Ensure this matches your user model name
use Illuminate\Support\Facades\Hash;

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
            'email' => 'required|email|unique:users,email|max:255',
            'password' => 'required|min:3',
        ]);

        // Create a new user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash the password
        ]);

        // Redirect or show success message
        return redirect('register')->with('success', 'User registered successfully!');
    }
}
