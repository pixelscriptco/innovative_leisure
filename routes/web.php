<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Settings\Role\RoleController;
use App\Http\Controllers\Settings\User\UserController;
use App\Http\Controllers\Project\ProjectController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', [FrontendController::class, 'index']);
Route::get('projects', [FrontendController::class, 'projectList'])->name('project.frontend');

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
