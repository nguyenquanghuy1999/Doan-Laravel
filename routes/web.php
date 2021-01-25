<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

//Frontend
Route::get('/', 'FrontendController@Home');
Route::get('detail/{id}.html', 'FrontendController@ProductDetail');
Route::get('types/{id}.html', 'FrontendController@Types');
Route::get('search','FrontendController@Search');



//Admin Panel (Backend)
Route::prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('index');
    Route::resource('products','ProductsController');
    Route::resource('users','UsersController');
    Route::resource('orders','OrdersController');
    Route::resource('order_details','OrderDetailsController');
    Route::resource('customers','CustomersController');
    Route::resource('types','TypesController');

});

//Authentication
Route::group(['middleware' => ['web', 'admin'], 'prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::resource('products','ProductsController');
    Route::resource('users','UsersController');
    Route::resource('types','TypesController');
    
});


//Gio hang
Route::group(['prefix'=>'cart'], function(){
    Route::get('add/{id}', 'CartController@getAddCart');
    Route::get('show','CartController@getShowCart');
    Route::get('delete/{id}', 'CartController@getDeleteCart');
    Route::get('update', 'CartController@getUpdateCart');
    Route::post('show', 'CartController@postComplete');
});

Route::get('complete', 'CartController@getComplete');

//Login

Auth::routes();

Route::get('/admin.index', 'HomeController@index')->name('admin');

