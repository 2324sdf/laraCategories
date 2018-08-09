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

use App\Category;
use App\Product;

Route::get('/', function () {

	$categories = Category::all();

	$products = Product::find(1);

    return view('home',compact('categories', 'products'));
});


Route::get('/displayTovar/{id}', function ($id) {

	$categories = Category::all();

	$products = Category::find($id)->products;
    return view('home',compact('categories','products'));
});



Route::get('/contentTovar/{id}', function ($id) {

	$categories = Category::all();

	$products = Product::find($id);
    return view('tovar',compact('categories','products'));
});


Route::get('/sortPrice/{id}', 'SortController@sortPrice');
Route::get('/sortABC/{id}', 'SortController@sortABC');


