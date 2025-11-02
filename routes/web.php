<?php

use Illuminate\Support\Facades\Route;

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
