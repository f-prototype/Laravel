<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('main/hello');
});
Route::get('/about', function () {
    return view('main/about');
});
Route::get('/contacts', function () {
    $contact = [
        'name' => 'Polytech',
        'adress' => 'B.Semenovskay',
        'phone' => '8(495) 423-23-23',
        'email' => '@mospolytech.ru'

    ];
    return view('main/contacts', ['contact' => $contact]);
});
