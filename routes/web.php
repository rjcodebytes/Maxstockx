<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

Route::get('', function () {
    return view('welcome');
});

Route::get('landing', function () {
    return view('welcome');
});


Route::get('login', function () {
    if (Auth::check()) {
        // Redirect to dashboard if user is already logged in
        return redirect()->route('dashboard');
    }
    return view('auth.login'); // Otherwise, show the login page
})->name('login');

// Handle Login Submission
Route::post('login', [AuthController::class, 'login'])->name('login.perform');
// Dashboard Page (Protected)

Route::get('dashboard', function () {
    return view('dashboards.dashboard');
})->middleware('auth')->name('dashboard');


// Admin dashboard route
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'adminlogin'])->name('admin.dashboard');
});

// Handle Logout
Route::post('logout', [AuthController::class, 'logout'])->name('logout.perform');


/**Sign Up */
Route::get('register', function () {
    return view('auth.register');
})->name('register');


Route::post('signup', [UserController::class, 'store'])->name('register.store');

Route::get('explore', function () {
    return view('courses.courses');
});
