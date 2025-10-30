<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/produk', function () {
    $npm = [123,124,125,126];
    $nama = ['Rai','Ray','Ria','Riska'];
    $jumlah = count ($npm);
    return view('produk' ,compact('npm','jumlah','nama'));
});
