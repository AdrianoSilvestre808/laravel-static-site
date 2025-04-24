<?php

use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'home']);
Route::get('/about', [SiteController::class, 'about']);
Route::get('/contact', [SiteController::class, 'contact']);
Route::post('/submit-form', [SiteController::class, 'handleForm']);
