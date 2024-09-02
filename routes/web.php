<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/profile', function () {
    return view('profile', ['title' =>'Profil']);
});

Route::get('/jurusan', function () {
    return view('jurusan', ['title' =>'Jurusan']);
});

Route::get('/ekstrakurikuler', function () {
    return view('ekstrakurikuler', ['title' =>'Ekstrakurikuler']);
});

Route::get('/bkk', function () {
    return view('bkk', ['title' =>'BKK']);
});

Route::get('/ppdb', function () {
    return view('ppdb', ['title' =>'PPDB']);
});