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
    Route::resource('/category', 'CategoryController', ['as'=>'admin']);
    Route::resource('/product', 'ProductController', ['as'=>'admin']);
});

Route::get('/','WelcomeController@index')->name('welcome');

Route::get('product/{slug?}', 'ShopController@product')->name('product');
Route::get('category/{slug?}', 'ShopController@category')->name('category');


Auth::routes();

/**Image**/
Route :: get ('image-upload', 'ImageUploadController @ imageUpload') -> name ('image.upload');
Route :: post ('image-upload', 'ImageUploadController @ imageUploadPost') -> name ('image.upload.post');

