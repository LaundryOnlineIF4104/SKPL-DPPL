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

Route::get('/', 'PagesController@home');
Route::get('/order', 'OrderController@order');
Route::post('/order', 'OrderController@postOrder');
Route::get('/login', 'AuthController@login');
Route::post('/register', 'AuthController@postRegister');
Route::post('/login', 'AuthController@postLogin');
Route::get('/logout', 'AuthController@logout');
Route::get('/profile', 'ProfileController@profile');
Route::get('/editprofile', 'ProfileController@editProfile');
Route::post('/editprofile', 'ProfileController@postEditProfile');
Route::get('/payment', 'PaymentController@payment');
Route::get('/detailpayment', 'PaymentController@detailpayment');
Route::post('/payment', 'PaymentController@postPayment');
Route::get('/orderList', 'editOrderController@orderList');
Route::get('/editOrder/{id}', 'editOrderController@editOrder');
Route::post('/editOrder/update', 'editOrderController@update');
Route::get('/deleteOrder/{id}', 'editOrderController@deleteOrder');
Route::get('/deactivateOrder/{id}', 'editOrderController@deactivate');