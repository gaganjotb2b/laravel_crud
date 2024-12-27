<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Addproduct;


Route::get('/', function () {
    return view('welcome');
});

Route::get("productList",[Addproduct::class,'productList']);
Route::post('addProduct',[Addproduct::class,'addProduct'] );
