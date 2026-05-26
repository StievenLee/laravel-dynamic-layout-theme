<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function(){
    return view('about', [
        'nama'=>'stieven',
        'umur'=>20,
        'alamat'=>'Indonesia',
    ]);
});

Route::get('/about/{id}/detail', function($id){
    return view('detail', [
        'nomor' => $id,
    ]);
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/product', [ProductController::class, 'getProduct']);

Route::get('/cashier', function(){
    return view('index');
})->name('index');

Route::get('/inventory', function(){
    return view('inventory');
})->name('inventory');
