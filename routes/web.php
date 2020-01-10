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
    Route::resource('/orders', 'OrdersController', ['as'=>'admin']);
    Route::resource('/textiles', 'TextilesController', ['as'=>'admin']);
   /* Route::get('/p-textile/{id?}', 'TextilesController@table');*/
    Route::resource('/product', 'ProductController', ['as'=>'admin']);
    Route::group(['prefix' => 'user_managment', 'namespace' => 'UserManagment' ], function () {
        Route::resource('/user', 'UserController', ['as'=>'admin.user_managment']);
    });
});

Route::get('/','WelcomeController@index')->name('welcome');

/*Route::get('product/{slug?}/{attr?}', 'ShopController@product')->name('product');*/
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
Route::get('/cart/update/{id}&{action}','CartController@update')->name('cart.update');
Route::delete('/cart/{id}','CartController@delete')->name('cart.delete');

Route::post('/cart2-details','Cart2Controller@go')->name('cart2.go');
Route::get('/cart2','Cart2Controller@index')->name('cart2.index');
Route::post('/cart2','Cart2Controller@add')->name('cart2.add');
/*Route::get('/cart-finish','Cart2Controller@finish')->name('cart3.finish');*/


Route::group(['prefix' => 'wishlist'],function()
{
    Route::get('/','WishListController@index')->name('wishlist.index');
    Route::post('/','WishListController@add')->name('wishlist.add');
    Route::get('/details','WishListController@details')->name('wishlist.details');
    Route::delete('/{id}','WishListController@delete')->name('wishlist.delete');
});
Route::get('refresh-csrf', function(){
    return csrf_token();
});

Auth::routes();

