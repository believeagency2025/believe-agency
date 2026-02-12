<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\DashboardController;

use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\LocaleController;

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/about', 'about')->name('about');
    Route::get('/services', 'services')->name('services');
    Route::get('/projects', 'projects')->name('projects');
    Route::get('/clients', 'clients')->name('clients');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/team', 'team')->name('team');
    // Services specific pages
    Route::get('/branding', 'branding')->name('branding');
    Route::get('/marketing', 'marketing')->name('marketing');
    Route::get('/web-design', 'webDesign')->name('web-design');
    Route::get('/apps-development', 'appDevelopment')->name('apps-development');
    Route::get('/ecommerce', 'ecommerce')->name('ecommerce');
    // Tools
    Route::get('/software-tools', 'softwareTools')->name('software-tools');
    // Project Details
    Route::get('/project-details', 'projectDetails')->name('project-details');
    // Legal
    Route::get('/privacy-policy', 'privacyPolicy')->name('privacy-policy');
    Route::get('/terms', 'terms')->name('terms');
});
Route::get('lang/{locale}', [LocaleController::class, 'switch'])->name('lang.switch');


@include('admin.php');

