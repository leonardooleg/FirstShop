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
Route::get('category/{slug?}', 'ShopController@category')->name('category');

Route::get('constructor', 'ShopController@constructor')->name('constructor');
Route::get('constructor2', 'ShopController@constructor2')->name('constructor2');

Route::get('html/productdesigner.html', function () {
    return redirect('/designer/html/productdesigner.html');
});
Auth::routes();

