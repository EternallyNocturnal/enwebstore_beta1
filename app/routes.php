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
Route::get('products', 'ProductsController@publicindex');
Route::post('/SendCommentFeedback', array('as' => 'commentFeedback', 'uses' => 'ProductsController@commentFeedback'));

Route::group(array('prefix' => 'admin/', 'before' => 'auth.basic'), function(){
	Route::get('productsmanager', array('as' => 'productManager', 'uses' => 'ProductsController@index'));
	Route::resource('productsadmin', 'ProductsadminsController');
	Route::resource('bands', 'BandsController');
	Route::resource('cart', 'CartsController');
	Route::resource('images', 'ImagesController');
	Route::post('images/store', array('as' => 'storeImage', 'uses' => 'ImagesController@newImage'));
	Route::resource('inventory', 'InventoriesController');
	Route::resource('shows', 'ShowsController');
	Route::resource('sales', 'SalesController');
	Route::resource('revenue', 'RevenuesController');
	Route::get('/newImage/form', array('as' => 'formnewImage', function(){return View::make('products.newImage');}));
	Route::put('/updateProducts/{id}', array('as' => 'updateProducts', 'uses' => 'ProductsController@update'));
	Route::post('/newProduct/make', array('as' => 'newProduct', 'uses' => 'ProductsController@store'));
	Route::post('/newProductCat/make', array('as' => 'newProductCat', 'uses' => 'ProductsController@newProductCat'));
	Route::post('/newImage/make', array('as' => 'newImage', 'uses' => 'ImagesController@newImage'));
	Route::get('/newImage', array('as' => 'shownewImage', 'uses' => 'ImagesController@index'));
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