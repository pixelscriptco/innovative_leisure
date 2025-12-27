<?php

use App\Http\Controllers\Booking\BookingController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Settings\Role\RoleController;
use App\Http\Controllers\Settings\User\UserController;
use App\Http\Controllers\Project\ProjectController;
use App\Http\Controllers\Product\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', [FrontendController::class, 'index']);
Route::get('projects', [FrontendController::class, 'projectList'])->name('project.frontend');
Route::get('products', [FrontendController::class, 'productList'])->name('product.frontend');
Route::prefix('cart')->group(function() {
    Route::get('view', [FrontendController::class, 'viewCart'])->name('cart.view');
});


Route::get('about-us', function () {
    return view('frontend.about');
});

Route::get('service', function () {
    return view('frontend.service');
});

Route::get('business-model', function () {
    return view('frontend.business_model');
});

Route::get('contact-us', function () {
    return view('frontend.contact_us');
});

Route::post('post-contact', [ContactController::class, 'postContact']);
Route::post('post-inquiry', [CartController::class, 'postInquiry']);

Auth::routes();

Route::prefix('admin')->group(function() {
    Route::prefix('dashboard')->group(function() {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    });
    Route::prefix('settings')->group(function() {
        Route::prefix('role')->group(function() {
            Route::get('list', [RoleController::class, 'list'])->name('role.list');
            Route::post('list', [RoleController::class, 'listDT']);
            Route::get('create', [RoleController::class, 'modal']);
            Route::post('create', [RoleController::class, 'save']);
            Route::get('{id}/edit', [RoleController::class, 'modal']);
            Route::post('{id}/edit', [RoleController::class, 'save']);
            Route::delete('{id}/delete', [RoleController::class, 'delete']);
            Route::get('{id}/privilege', [RoleController::class, 'privilege']);
            Route::post('{id}/privilege', [RoleController::class, 'privilegeAssign']);
        });
        Route::prefix('user')->group(function() {
            Route::get('list', [UserController::class, 'list'])->name('user.list');
            Route::post('list', [UserController::class, 'listDT']);
            Route::get('create', [UserController::class, 'modal']);
            Route::post('create', [UserController::class, 'save']);
            Route::get('{id}/edit', [UserController::class, 'modal']);
            Route::post('{id}/edit', [UserController::class, 'save']);
            Route::delete('{id}/delete', [UserController::class, 'delete']);
            Route::post('{id}/send-login-credentials', [UserController::class, 'sendLoginCredentials']);
        });
    });
    Route::prefix('project')->group(function() {
        Route::get('list', [ProjectController::class, 'list'])->name('project.list');
        Route::post('list', [ProjectController::class, 'listDT']);
        Route::get('create', [ProjectController::class, 'modal']);
        Route::post('create', [ProjectController::class, 'save']);
        Route::get('{id}/edit', [ProjectController::class, 'modal']);
        Route::post('{id}/edit', [ProjectController::class, 'save']);
        Route::delete('{id}/delete', [ProjectController::class, 'delete']);
    });
    Route::prefix('product')->group(function() {
        Route::get('list', [ProductController::class, 'list'])->name('product.list');
        Route::post('list', [ProductController::class, 'listDT']);
        Route::get('create', [ProductController::class, 'modal']);
        Route::post('create', [ProductController::class, 'save']);
        Route::get('{id}/edit', [ProductController::class, 'modal']);
        Route::post('{id}/edit', [ProductController::class, 'save']);
        Route::delete('{id}/delete', [ProductController::class, 'delete']);
    });
    Route::prefix('booking')->group(function() {
        Route::get('list', [BookingController::class, 'list'])->name('booking.list');
        Route::post('list', [BookingController::class, 'listDT']);
        Route::post('{id}/change-status', [BookingController::class, 'saveStatus']);
        Route::delete('{id}/delete', [BookingController::class, 'delete']);
    });
});

Route::post('logout', [DashboardController::class, 'logout']);
