<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Carbon\Carbon;
use Auth;

class EmailVerificationController extends Controller
{
    // Send OTP to Email
    public function sendOtp(Request $request)
    {
        $user = Auth::user();
        $otp = rand(100000, 999999);

        // Store OTP in session for verification
        Session::put('email_otp', $otp);
        Session::put('otp_expires_at', now()->addMinutes(1));

        // Send OTP via Email (Using Laravel Mail)
        Mail::raw("Your OTP for email verification is: $otp", function ($message) use ($user) {
            $message->to($user->email)
                    ->subject('Email Verification OTP');
        });

        return response()->json([
            'message' => 'OTP sent successfully to ' . $user->email
        ]);
    }

    // Verify OTP
    public function verifyOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|numeric',
        ]);

        $user = Auth::user();
        $otp = Session::get('email_otp');
        $otpExpiresAt = Session::get('otp_expires_at');

        if (!$otp || now()->greaterThan($otpExpiresAt)) {
            return response()->json(['message' => 'OTP expired. Please request a new one.'], 422);
        }

        if ($request->otp != $otp) {
            return response()->json(['message' => 'Invalid OTP. Try again.'], 422);
        }

        // Mark email as verified
        $user->email_verified_at = Carbon::now();
        $user->save();

        // Clear OTP session
        Session::forget('email_otp');
        Session::forget('otp_expires_at');

        return response()->json(['message' => 'Email verified successfully!']);

    }
}
