<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CourseController;


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

    Route::get('explore', function () {
        return view('courses.courses');
    })->name('user.explore');
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
    Route::get('/admin/add-content/{id}',[CourseController::class,'addContent'])->name('admin.addcontent');

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
