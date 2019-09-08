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

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth'] ], function () {
    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
    Route::get('/data-chart', 'DashboardController@chartData')->name('admin.chart_data');
    Route::resource('/category', 'CategoryController', ['as'=>'admin']);
    Route::resource('/product', 'ProductController', ['as'=>'admin']);
    Route::group(['prefix' => 'user_managment', 'namespace' => 'UserManagment' ], function () {
        Route::resource('/user', 'UserController', ['as'=>'admin.user_managment']);
    });
});

Route::get('/','WelcomeController@index')->name('welcome');

Route::get('product/{slug?}', 'ShopController@product')->name('product');
Route::get('product-cart/{id?}', 'ShopController@productID')->name('productID');
Route::get('category/{slug?}', 'ShopController@category')->name('category');

Route::get('constructor', 'ShopController@constructor')->name('constructor');
Route::get('constructor2', 'ShopController@constructor2')->name('constructor2');

Route::get('html/productdesigner.html', function () {
    return redirect('/designer/html/productdesigner.html');
});
Route::get('home', function () {
    return redirect('/admin');
});



Route::get('/cart','CartController@index')->name('cart.index');
Route::post('/cart','CartController@add')->name('cart.add');
Route::post('/cart/conditions','CartController@addCondition')->name('cart.addCondition');
Route::delete('/cart/conditions','CartController@clearCartConditions')->name('cart.clearCartConditions');
Route::get('/cart/details','CartController@details')->name('cart.details');
Route::delete('/cart/{id}','CartController@delete')->name('cart.delete');

Route::group(['prefix' => 'wishlist'],function()
{
    Route::get('/','WishListController@index')->name('wishlist.index');
    Route::post('/','WishListController@add')->name('wishlist.add');
    Route::get('/details','WishListController@details')->name('wishlist.details');
    Route::delete('/{id}','WishListController@delete')->name('wishlist.delete');
});

Auth::routes();
