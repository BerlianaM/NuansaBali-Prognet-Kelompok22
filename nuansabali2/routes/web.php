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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('Home');
});
Route::get('/product', function () {
    return view('Product');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/categorie', function () {
    return view('categorie');
});
Route::get('/cart', function () {
    return view('Cart');
});

// product
Route::get('/1tasrotan', function () {
    return view('1tasrotan');
});
Route::get('/2piesusu', function () {
    return view('2piesusu');
});
Route::get('/3kacang', function () {
    return view('3kacang');
});
Route::get('/4lukisan', function () {
    return view('4lukisan');
});
Route::get('/5sendal', function () {
    return view('5sendal');
});
Route::get('/6bajubali', function () {
    return view('6bajubali');
});
Route::get('/7gantungan', function () {
    return view('7gantungan');
});
Route::get('/8alatmusik', function () {
    return view('8alatmusik');
});
Route::get('/8alatmusik', function () {
    return view('8alatmusik');
});
Route::get('/9udeng', function () {
    return view('9udeng');
});
Route::get('/10bajuanak', function () {
    return view('10bajuanak');
});
Route::get('/11kamenbali', function () {
    return view('11kamenbali');
});
Route::get('/12dompet', function () {
    return view('12dompet');
});
Route::get('/13perhiasan', function () {
    return view('13perhiasan');
});
