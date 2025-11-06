<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('frontend/index');
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
