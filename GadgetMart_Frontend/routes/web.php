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


/**
 * login
 */
Route::get('/login', function () {
    return view('login');
});
/**
 * logout & session
 */
Route::get('logout', 'PublicController@logout');
Route::post('session/call', 'PublicController@setlocalgadgetSession');

/**
 * main index page load
 */
// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', 'ProductController@productLoad');
/**
 * load all product
 */
Route::get('/product-all', function () {
    return view('all-product');
});

Route::get('/cart-view', function () {
    return view('checkout');
});

/**
 * load single item
 */
Route::get('single-item/{id}', 'PublicController@singleitemload');
Route::get('category-by-data/{name}/{id}', 'PublicController@loadcatdata');
Route::get('brand-by-data/{name}/{id}', 'PublicController@loadBranddata');
Route::get('customer-order-history', 'PublicController@customerOrderHistory');
