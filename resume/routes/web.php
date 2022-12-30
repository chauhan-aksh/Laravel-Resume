<?php

use App\Http\Controllers\contactcontrol;
use App\Http\Controllers\servicecontrol;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('skill', function () {
    return view('skill');
})->name('skill');

Route::get('service',[servicecontrol::class,'show'])->name('service');
Route::get('contact', [contactcontrol::class,'show'])->name('contact');

