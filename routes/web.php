<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\ForgotPasswordController;

Route::get('/', function () {
    return view('welcome');
});

// Authentication Routes
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');

    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

// Authenticated Routes
Route::middleware('auth')->group(function () {
    // Dashboard Route
    Route::get('/dashboard', [StudentController::class, 'index'])->name('dashboard');

    Route::get('header', [HomeController::class, 'index'])->name('header');
    Route::get('/profile', [AuthController::class, 'profile'])->name('profile');

    // Student Routes
    Route::get('/student/register', [StudentController::class, 'showRegistrationForm'])->name('student.register');
    Route::post('/student/register', [StudentController::class, 'store'])->name('student.store');
    Route::get('/students', [StudentController::class, 'index'])->name('students.index');

    // Static Pages
    Route::get('/home', function () {
        return view('home');
    })->name('home');

    Route::get('/course', function () {
        return view('course');
    })->name('course');

    Route::get('/registration', function () {
        return view('registration');
    })->name('registration');

    Route::get('/admission', function () {
        return view('admission');
    })->name('admission');

    Route::get('/studentreg', function () {
        return view('studentreg');
    })->name('studentreg');


    
});



Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    // Add more admin-specific routes here
});

// Email Verification Routes
Route::middleware(['auth'])->group(function () {
    Route::get('/email/verify', function () {
        return view('auth.verify-email');
    })->name('verification.notice');

    Route::get('/email/verify/{id}/{hash}', function (\Illuminate\Foundation\Auth\EmailVerificationRequest $request) {
        $request->fulfill();
        return redirect('/home');
    })->middleware(['signed'])->name('verification.verify');

    Route::post('/email/verification-notification', function (\Illuminate\Http\Request $request) {
        $request->user()->sendEmailVerificationNotification();
        return back()->with('message', 'Verification link sent!');
    })->middleware(['throttle:6,1'])->name('verification.send');
});

// Forgot Password Routes
Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
