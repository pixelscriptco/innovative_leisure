<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Settings\Role\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('frontend/index');
});

Route::get('about-us', function () {
    return view('frontend/about');
});

Route::get('service', function () {
    return view('frontend/service');
});

Route::get('business-model', function () {
    return view('frontend/business_model');
});

Route::get('contact-us', function () {
    return view('frontend/contact_us');
});

Route::post('post-contact', [ContactController::class, 'postContact']);

Auth::routes();

Route::prefix('admin')->group(function() {
    Route::prefix('dashboard')->group(function() {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    });
    Route::prefix('settings')->group(function() {
        Route::prefix('role')->group(function() {
            Route::get('list', [RoleController::class, 'list'])->name('role.list');
        });
    });
    Route::get('project', function() {
        return view();
    })->name('project.list');
    Route::get('product', function() {
        return view();
    })->name('product.list');
    Route::get('user', function() {
        return view();
    })->name('user.list');
//    Route::get('role', function() {
//        return view();
//    })->name('role.list');
});
