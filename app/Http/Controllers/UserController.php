<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User; // Ensure this matches your user model name
use App\Models\EmailVerification;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use App\Mail\OldEmailVerification;
use App\Mail\NewEmailOtp;
use Carbon\Carbon;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

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

    public function userProfile()
    {
        $user = auth()->user(); // Assuming you're using Laravel's built-in authentication
        return view('users.profile.profile', compact('user'));
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . auth()->user()->user_id . ',user_id',
            'mobile_number' => [
                'required',
                'regex:/^\+91\d{10}$/', // Matches +91 followed by 10 digits
            ],
        ]);

        $user = auth()->user();
        $user->update($request->only('name', 'email', 'mobile_number'));

        return redirect()->route('users.Profile')->with('success', 'Profile updated successfully!');
    }

    public function sendVerificationLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email',
        ]);

        $user = auth()->user();
        $newEmail = $request->email;
        $token = Str::random(40);
        $expiresAt = now()->addMinutes(10);

        DB::table('email_verifications')->updateOrInsert(
            ['user_id' => $user->user_id],
            [
                'old_email' => $user->email,
                'new_email' => $newEmail,
                'token' => $token,
                'expires_at' => $expiresAt,
            ]
        );

        $verificationLink = route('user.verify.old.email', ['token' => $token]);

        Mail::to($user->email)->send(new OldEmailVerification($verificationLink, $newEmail));

        return redirect()->back()->with('success', 'Verification link has been sent to your old email.');
    }

    public function verifyOldEmail(Request $request, $token)
    {
        $verification = DB::table('email_verifications')->where('old_email', auth()->user()->email)->where('expires_at', '>', Carbon::now())->first();

        if (!$verification || !hash_equals($token, $verification->token)) {
            return redirect()->route('users.Profile')->with('error', 'Verification link is invalid or expired.');
        }

        // Generate OTP for the new email
        $otp = rand(100000, 999999);

        // Update OTP in the verification record
        DB::table('email_verifications')->where('id', $verification->id)->update([
            'otp' => $otp,
        ]);

        // Send OTP to the new email
        Mail::to($verification->new_email)->send(new NewEmailOtp($otp));

        return redirect()->route('users.Profile')->with([
            'showOtpSection' => true,
            'success' => 'OTP has been sent to your new email address.'
        ]);
    }

    public function verifyNewEmail(Request $request)
    {
        $request->validate([
            'otp' => 'required|numeric',
        ]);

        $verification = DB::table('email_verifications')
            ->where('otp', $request->otp)
            ->where('expires_at', '>', now())
            ->first();

        if (!$verification) {
            return redirect()->route('users.Profile')->with('error', 'Invalid or expired OTP.');
        }

        $user = User::find($verification->user_id);
        $user->email = $verification->new_email;
        $user->email_verified_at = now();
        $user->save();

        DB::table('email_verifications')->where('id', $verification->id)->delete();

        session()->forget('showOtpSection');

        return redirect()->route('users.Profile')->with('success', 'Email updated and verified successfully.');
    }




}
