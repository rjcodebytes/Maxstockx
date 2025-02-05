<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\UserCourseController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\EmailVerificationController;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Verified;

Route::get('', function () {
    return view('welcome');
});

Route::get('landing', function () {
    return view('welcome');
});



Route::get('login', function () {
    // Check if an admin is logged in
    if (Auth::guard('admin')->check()) {
        // Redirect to admin dashboard
        return redirect()->route('admin.dashboard');
    }

    // Check if a user is logged in
    if (Auth::guard('web')->check()) {
        // Redirect to user dashboard
        return redirect()->route('users.dashboard');
    }

    // Otherwise, show the login page
    return view('auth.login');
})->name('login');


// Handle Login Submission
Route::post('login', [AuthController::class, 'login'])->name('login.perform');
// Dashboard Page (Protected)



Route::middleware(['auth:web'])->group(function () {

    Route::get('/users/dashboard', function () {
        return view('users.dashboard'); // Ensure a separate user dashboard view exists
    })->name('users.dashboard');

    //Profile Routes
    Route::get('/users/profile', [UserController::class, 'userProfile'])->name('users.Profile');
    Route::put('/users/profile/update', [UserController::class, 'updateProfile'])->name('user.update.profile');
    Route::put('/users/profile/sendlink', [UserController::class, 'sendVerificationLink'])->name('user.send.link');
    Route::get('/profile/verify-old-email/{token}', [UserController::class, 'verifyOldEmail'])->name('user.verify.old.email');
    Route::post('/profile/verify-new-email', [UserController::class, 'verifyNewEmail'])->name('user.verify.new.email');
    Route::post('/send-otp', [EmailVerificationController::class, 'sendOtp'])->name('send.otp');
    Route::post('/verify-otp', [EmailVerificationController::class, 'verifyOtp'])->name('verify.otp');
    Route::get('/check-email-status', function () {
        return response()->json(['verified' => Auth::user()->email_verified_at ? true : false]);
    })->name('check.email.status')->middleware('auth');

    //Courses Routes
    Route::get('/user/course/explore', [UserCourseController::class, 'viewcourse'])->name('course.explore');
    Route::get('/user/course/{id}', [UserCourseController::class, 'viewCourseDetails'])->name('course.details');
    Route::get('/user/course/access/{id}', [UserCourseController::class, 'accessCourse'])->name('course.access');
    Route::get('/users/course/enrolled', [UserCourseController::class, 'enrolledCourses'])->name('course.enrolled');

    //Enroll
    Route::get('/user/course/enroll/{course_id}', [PaymentController::class, 'enroll'])->name('course.enroll');
    Route::post('/user/course/payment/callback', [PaymentController::class, 'paymentCallback'])->name('payment.callback');

    Route::get('/pdf/{id}', function ($id) {
        $content = \App\Models\CourseContent::find($id); // Replace with your model
        if ($content && $content->pdf_content) {
            return Response::make($content->pdf_content, 200, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="document.pdf"'
            ]);
        }
        abort(404); // PDF not found
    })->name('pdf.view');

});


// Admin dashboard route
Route::middleware(['auth:admin'])->group(function () {

    Route::get('/admin/dashboard', [AdminController::class, 'adminlogin'])->name('admin.dashboard');
    Route::get('/admin/managecourses', [CourseController::class, 'managecourse'])->name('admin.managecourse');
    Route::get('/admin/createcourses', [CourseController::class, 'createcourse'])->name('admin.createcourse');
    Route::post('/admin/storecourses', [CourseController::class, 'store'])->name('admin.storecourse');
    Route::post('/admin/deletecourses/{id}', [CourseController::class, 'destroy'])->name('admin.deletecourse');
    Route::get('/admin/editcourse/{id}', [CourseController::class, 'edit'])->name('admin.editcourse');
    Route::post('/admin/updatecourse/{id}', [CourseController::class, 'update'])->name('admin.updatecourse');

    Route::post('/admin/store-content/{id}', [CourseController::class, 'storeContent'])->name('admin.storeContent');
    Route::post('/admin/deletecontent/{id}', [CourseController::class, 'destroyContent'])->name('admin.deletecontent');
    Route::get('/admin/add-content/{id}', [CourseController::class, 'addContent'])->name('admin.addcontent');

    Route::get('/admin/manageusers', [AdminController::class, 'manageuser'])->name('admin.manageuser');

    Route::get('/export-users', [AdminController::class, 'export'])->name('export.users');
    Route::get('/export-download', [AdminController::class, 'downloadExport'])->name('export.download');

    // Handle Logout
    Route::post('logout', [AuthController::class, 'logout'])->name('logout.perform');
});

// Handle Logout
Route::post('logout', [AuthController::class, 'logout'])->name('logout.perform');


/**Sign Up */
Route::get('register', function () {
    return view('auth.register');
})->name('register');


Route::post('signup', [UserController::class, 'store'])->name('register.store');
Route::post('check-uniqueness', [UserController::class, 'checkUniqueness'])->name('check.uniqueness');

Route::get('explore', function () {
    return view('courses.courses');
});


Route::get('privacy-policy', function () {
    return view('privacy_policy');
})->name('privacy-policy');

Route::get('t_and_c', function () {
    return view('t_and_c');
})->name('terms-conditions');

Route::get('about-us', function () {
    return view('about_us');
})->name('about-us');
