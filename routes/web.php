<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get("/","LoginController@viewFormLogin");
Route::post("/customers/","LoginController@accessLogin")->name("loginSucess");
//
//Route::get("/product","ProductController@showFormProduct");
//Route::post("/discount","ProductController@discountProduct")->name("product");

Route::prefix('customers')->group(function (){
    Route::get("/","CustomerController@indexCustomer")->name("customer.index");

    Route::get("/list","CustomerController@show")->name("customer.show");

    Route::get("/create","CustomerController@create")->name("customer.create");
    Route::post("/create","CustomerController@createSucces")->name("customer.create");

    Route::get("/edit/{id}","CustomerController@edit")->name("customer.edit");
    Route::post("/edit/{id}", "CustomerController@update")->name("customer.edit");

    Route::get("/delete/{id}","CustomerController@destroy")->name("customer.delete");

});

