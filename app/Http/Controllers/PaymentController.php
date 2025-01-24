<?php

namespace App\Http\Controllers;

use App\Models\EnrolledCourse;
use App\Models\Course;
use Illuminate\Http\Request;
use Razorpay\Api\Api;

class PaymentController extends Controller
{
    public function enroll(Request $request, $course_id)
    {
        $course = Course::findOrFail($course_id);

        $user = auth()->user(); // Get the logged-in user

        // Razorpay API integration
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
        $order = $api->order->create([
            'receipt' => 'order_' . uniqid(),
            'amount' => $course->course_pricing * 100, // Amount in paise
            'currency' => 'INR',
        ]);

        return view('users.courses.checkout', [
            'order_id' => $order->id,
            'amount' => $course->course_pricing,
            'course' => $course,
            'user' => $user,
        ]);
    }

    public function paymentCallback(Request $request)
    {
        $input = $request->all();

        try {
            $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
            $payment = $api->payment->fetch($input['razorpay_payment_id']);

            if ($payment->status == 'captured') {
                // Store the enrollment in the database
                EnrolledCourse::create([
                    'user_id' => auth()->user()->user_id,
                    'course_id' => $input['course_id'],
                    'transaction_id' => $payment->id,
                ]);

                // Return a success response for AJAX
                session()->flash('success', 'Enrollment successful!');
                return response()->json([
                    'status' => 'success',
                    'redirect_url' => route('users.dashboard'),
                    'message' => 'Enrollment successful!',
                ]);
            }

            // For payment verification failure
            session()->flash('error', 'Payment verification failed.');
            return response()->json([
                'status' => 'error',
                'redirect_url' => route('course.details', ['id' => $input['course_id']]),
                'message' => 'Payment verification failed.',
            ]);

        } catch (\Exception $e) {
            session()->flash('error', 'Payment verification failed.');
            return response()->json([
                'status' => 'error',
                'message' => $e->getMessage(),
            ]);
        }
    }

}
