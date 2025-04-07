<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ProfileController;


/*
|---------------------------------------------------------------------------
| Web Routes
|---------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Public Routes for Login and Registration
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('login.post');
    Route::post('/register', [AdminAuthController::class, 'register'])->name('register');
    Route::get('/register', [AdminAuthController::class, 'showRegistrationForm'])->name('register.show');



    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');
    Route::get('/forget-password', [AdminAuthController::class, 'showForgotPassword'])->name('forgetPassword');
    Route::post('/forget-password', [AdminAuthController::class, 'forgetPassword'])->name('forgetPassword.post');
    Route::get('/reset-password/{token}', [AdminAuthController::class, 'showResetPassword'])->name('resetPassword');
    Route::post('/reset-password', [AdminAuthController::class, 'resetPassword'])->name('resetPassword.post');
    Route::get('/verify-otp', [AdminAuthController::class, 'showVerifyOtpForm'])->name('verify.otp.show');
    Route::post('/send-otp', [AdminAuthController::class, 'sendOtp'])->name('send.otp');
    Route::post('/resend-otp', [AdminAuthController::class, 'resendOtp'])->name('resend.otp');
    Route::post('/verify-otp', [AdminAuthController::class, 'verifyOtp'])->name('verify.otp');
    Route::post('/complete-registration', [AdminAuthController::class, 'completeRegistration'])->name('complete.registration');


    // Protected Routes for Admin (using middleware)
    Route::middleware('check.admin')->group(function() {
        // Admin dashboard route
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
        // Other protected admin routes can be added here
    });

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');  
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::post('/users/bulk-delete', [UserController::class, 'bulkDelete'])->name('users.bulk_delete');
    Route::post('/users/update-status', [UserController::class, 'updateStatus'])->name('users.updateStatus');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');

});
