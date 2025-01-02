<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Addproduct;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\Auth;
use function Pest\Laravel\delete;

//Home Page route
Route::get('/', function () {
    return view('Home');
});


//Admin route 
Route::get('/admin', function () {
    return view('Admin');
});


Route::get('/admin/addProduct', function () {
    return view('addProduct');
});


Route::get('/DeleteProduct', function () {
    return view('DeleteProduct');
});
Route::get('/UpdateProduct', function () {
    return view('UpdateProduct');
});

Route::get('/admin/{id}/edit', [ItemController::class,'edit'])->name("product.edit");
// Route::get('/items/{id}/edit', [ItemController::class,'update']);

Route::get("/admin/productList",[Addproduct::class,'productList']);
Route::post('/admin/postAddProduct',[Addproduct::class,'addProduct'] );

Route::put("/admin/{id}",[Addproduct::class,'updateProduct'])->name("product.update");

Route::delete("/admin/{id}",[Addproduct::class,'deleteProduct'])->name("product.delete");



//route for the sign in 
Route::get("/signin",[Auth::class,'signin'])->name("signin");


//route for signup 
Route::get("/signup",[Auth::class,'signup'])->name("signup");