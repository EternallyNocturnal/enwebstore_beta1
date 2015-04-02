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


Route::filter('auth.basic', function()
{
    return Auth::basic("username");
});


//+++++++++++++++++++++++GENERAL ROUTES+++++++++++
Route::resource('products', 'ProductsController');

Route::group(array('prefix' => 'admin/', 'before' => 'auth.basic'), function(){
	Route::resource('bands', 'BandsController');
	Route::resource('cart', 'CartsController');
	Route::resource('images', 'ImagessController');
	Route::resource('inventory', 'InventoriesController');
	Route::resource('shows', 'ShowsController');
	Route::resource('sales', 'SalesController');
	Route::resource('revenue', 'RevenuesController');
});

//----------------------GENERAL ROUTES------------


//++++++++++API ROUTES+++++++++++++++++++++++++


Route::group(array('prefix' => 'api/v1', 'before' => 'auth.basic'), function()
{
	Route::resource('api', 'ApisController');
    Route::resource('url', 'UrlsController');
    //more API Routes here.

});


//----------------API ROUTES-------------------





//+++++++++++++++++++++++++SORT ROUTES+++++++++++++
Route::get('/fetchProducts/{type}', array('as' => 'sortProducts', 'uses' => 'ProductsController@sortProducts'));
//-------------------------------------------------

//++++++++++E COMMERCE+++++++++++++++++++++++++++++
Route::post('/doPayment', array('as' => 'doPayment', 'uses' => 'SalesController@doPayment'));
//--------------E COMMERCE-------------------------