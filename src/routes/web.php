<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Soroux\Contact\Http\Controllers\ContactController;

Route::get('contact',[ContactController::class,'index'])->name('contact');
Route::post('contact',[ContactController::class,'send']);
