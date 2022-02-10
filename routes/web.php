<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;



Route::resource('/contact', ContactController::class);
