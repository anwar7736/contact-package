<?php

use Anwar\Contact\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;


Route::controller(ContactController::class)->group(function(){
    Route::get('/contact', 'index')->name('contact');
    Route::post('/send-message', 'sendMessage')->name('send.message');
});

