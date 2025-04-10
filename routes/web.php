<?php

use Illuminate\Support\Facades\Route;
use App\Http\Contorllers\UserController;

Route::get ('/',function(){
    return view ('home');
})->name('home');

Route::get ('/contact',function(){
    return view ('contact');
})->name('contact');

Route::get ('/porto',function(){
    return view ('portofolio');
})->name('porto');

Route::get ('/achievement',function(){
    return view ('achive');
})->name('achievement');