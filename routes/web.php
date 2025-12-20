<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\postController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\paymentController;
use App\Http\Controllers\postJobController;
use App\Http\Controllers\messagesController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\settingsController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\joblistingsController;
use App\Http\Controllers\PasswordResetController;
use App\Http\Controllers\applicationFormController;
use App\Http\Controllers\workerDashboardController;
use App\Http\Controllers\employerDashboardController;
use App\Http\Controllers\employersDashboardController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        if (Auth::user()?->role === 'super-admin') {
            return redirect()->route('super.dashboard');
        }

        // return view('dashboard', ['title' => 'Dashboard']);
        return redirect()->route('user.dashboard');
    })->name('dashboard');

    Route::get('/', App\Livewire\Dashboard::class)->name('user.dashboard');
    // Route::resource('users', UserController::class);
});

Route::middleware(['auth', 'role:super-admin'])->prefix('super')->group(function () {

    Route::get('/', App\Livewire\Super\Dashboard::class)->name('super.dashboard');

});

require __DIR__.'/auth.php';

Route::get('/jobs', [JobsController::class, 'jobs'])->name('jobs');
Route::get('/admin', [AdminController::class, 'admin'])->name('admin');
Route::get('/dashboard', [dashboardController::class, 'dashboard'])->name('dashboard');
Route::get('/home', [homeController::class, 'home'])->name('home');
Route::get('/employerDashboard', [employersDashboardController::class, 'employers'])->name('employers');
Route::get('/worker', [workerDashboardController::class, 'worker'])->name('worker');
Route::get('/applicationForm', [applicationFormController::class, 'applicationForm'])->name('applicationForm');
Route::get('/postjob', [postjobController::class, 'postjob'])->name('postjob');
Route::get('/post', [postController::class, 'post'])->name('post');;
Route::get('/contact', [contactController::class, 'contact'])->name('contact');
Route::get('payment',[paymentController::class, 'payment'])->name('payment');
Route::get('joblistings',[joblistingsController::class, 'joblistings'])->name('joblistings');
Route::get('messages',[messagesController::class, 'messages'])->name('messages');
Route::get('login',[loginController::class, 'login'])->name('login');
Route::get('register',[registerController::class, 'register'])->name('register');
Route::get('settings',[settingsController::class, 'settings'])->name('settings');
Route::get('PasswordReset',[PasswordResetController::class, 'PasswordReset'])->name('PasswordReset');