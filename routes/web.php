<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/NetBugs', function () {
    return view('index');
});

Route::get('/Example', function () {
    $arra = ['Taxt1', 'Taxt2', 'Taxt3', 'Taxt4'];
    return view('Example', ['name' => 'Finn', 'arra' => $arra, 'num' => 6]);
});

Route::get('/Example1', function () {
    $arra = ['Taxt1', 'Taxt2', 'Taxt3', 'Taxt4'];
    return view('Example', ['name' => 'Alan', 'arra' => $arra, 'num' =>-1]);
});

Route::post('/NetBugs/Info', 'App\Http\Controllers\ControlEx@submit');

