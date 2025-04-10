<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Contact;

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

Route::post('/contact', function (Request $request) {
    // Validate the incoming request data
    $request->validate([
        'Name' => 'required|string|max:255',
        'Email' => 'required|email|max:255',
        'Message' => 'required|string',
    ]);

    // Create a new contact entry in the database
    Contact::create([
        'name' => $request->Name,
        'email' => $request->Email,
        'message' => $request->Message,
    ]);

    // Redirect back with a success message
    return back()->with('success', 'Thank you for your message!');
});