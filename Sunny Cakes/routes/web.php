<?php

use Illuminate\Support\Facades\Route;

Route::get('/user', function (){
    return view('user');
});

Route::get('/', function () {
    return view('home');
});

Route::get('/banh-ngot', function () {
    return view('MucLuc.BanhNgot');
});

Route::get('/banh-man', function () {
    return view('MucLuc.BanhMan');
});

Route::get('/sua', function () {
    return view('MucLuc.Sua');
});