<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");

Route::get('/contact', function () {
    return "Contact us at: " . Str::random(10) . "@example.com or call +1-" . rand(100, 999) . "-" . rand(100, 999) . "-" . rand(1000, 9999);
});

Route::get('/about', function () {

$data1 = "About us - Online Store";

$data2 = "About us";

$description = "This is an about page ...";

$author = "Developed by: Daniel Arango";

return view('home.about')->with("title", $data1)

->with("subtitle", $data2)

->with("description", $description)

->with("author", $author);

})->name("home.about");

Route::get('/products', 'App\Http\Controllers\ProductController@index')->name("product.index");

Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show");
