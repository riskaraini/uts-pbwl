<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/tambahproduk', function () {
    return view('tambahproduk');
});


Route::get('/produk', function () {
    $kode = ['BRG001','BRG002'];
    $nama = ['Pena','Buku'];
    $harga = ['20000','15000'];
        return view('produk' ,compact('kode','harga','nama'));
});