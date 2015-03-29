<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

//+++++++++++++++++++++++GENERAL ROUTES+++++++++++
Route::resource('products', 'ProductsController');
Route::resource('api', 'ApisController');
Route::resource('bands', 'BandsController');
Route::resource('cart', 'CartsController');
Route::resource('images', 'ImagessController');
Route::resource('inventory', 'InventoriesController');
Route::resource('shows', 'ShowsController');
Route::resource('sales', 'SalesController');
Route::resource('revenue', 'RevenuesController');
//----------------------GENERAL ROUTES------------










//+++++++++++++++++++++++++SORT ROUTES+++++++++++++
Route::get('/fetchProducts/{type}', array('as' => 'sortProducts', 'uses' => 'ProductsController@sortProducts'));
//-------------------------------------------------

//++++++++++E COMMERCE+++++++++++++++++++++++++++++
Route::post('/doPayment', array('as' => 'doPayment', 'uses' => 'SalesController@doPayment'));
//--------------E COMMERCE-------------------------