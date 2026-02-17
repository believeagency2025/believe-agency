<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\LocaleController;

// Admin Routes
use App\Http\Controllers\Admin\AuthController;

use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\Admin\BlogController;

// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {
    // Auth Routes
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Protected Routes
    Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('lang/{locale}', [LocaleController::class, 'switch'])->name('lang.switch');

        // Resource Routes
        Route::delete('projects/images/{image}', [ProjectController::class, 'deleteImage'])->name('projects.images.destroy');
        Route::resource('projects', ProjectController::class);
        Route::resource('services', ServiceController::class);
        Route::resource('clients', ClientController::class);
        Route::resource('team', TeamController::class);
        Route::resource('testimonials', TestimonialController::class);
        Route::resource('blogs', BlogController::class);
        Route::resource('messages', ContactMessageController::class)->only(['index', 'show', 'destroy']);

        // Settings
        Route::get('/settings', [SettingController::class, 'index'])->name('settings');
        Route::post('/settings', [SettingController::class, 'update'])->name('settings.update');
    });
});
