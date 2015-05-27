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


//+++++++++++++++++++++++GENERAL ROUTES+++++++++++
Route::get('products', array('as' => 'PublicIndex', 'uses' => 'ProductsController@publicindex'));
Route::post('/SendCommentFeedback', array('as' => 'commentFeedback', 'uses' => 'ProductsController@commentFeedback'));


//+++++++++++++++++++++++++++++ADMIN ROUTES+++++++++
Route::group(array('before' => 'auth.basic'), function(){

	Route::post('updateInv', array('as' => 'updateInv', 'uses' => 'MobilesalesController@updateInv'));
	Route::resource('mobilesales', 'MobilesalesController');
	//+++++++++++PRODUCTS+++++++++++++++++++++++++++
	Route::get('productsmanager', array('as' => 'productManager', 'uses' => 'ProductsController@index'));
	Route::resource('inventory', 'InventoriesController');
	Route::resource('productsadmin', 'ProductsadminsController');
	Route::post('/newProduct/make', array('as' => 'newProduct', 'uses' => 'ProductsController@store'));
	Route::post('/newProductCat/make', array('as' => 'newProductCat', 'uses' => 'ProductsController@newProductCat'));
	Route::put('/updateProducts/{id}', array('as' => 'updateProducts', 'uses' => 'ProductsController@update'));
	Route::resource('contacttypes', 'ContacttypesController');
	//+++++++++++BANDS+++++++++++++++++++++++++
	Route::resource('bands', 'BandsController');


	//+++++++++++SHOWS++++++++++++++

	Route::resource('shows', 'ShowsController');
	Route::resource('venues', 'VenuesController');
	Route::resource('shippings', 'ShippingsController');

	
	//++++++++++++COMMERCE++++++++++++++++
	Route::resource('cart', 'CartsController');
	Route::post('/cartitems', array('as' => 'addToCart', 'uses' => 'CartsController@addToCart'));
	Route::post('/cartitems/empty', array('as' => 'emptyCart', 'uses' => 'CartsController@emptyCart'));
	Route::post('/cartitems/remove', array('as' => 'removeFromCart', 'uses' => 'CartsController@removeFromCart'));
	Route::post('/checkout', array('as' => 'checkOut', 'uses' => 'CartsController@checkOut'));
	Route::get('/shipping/makeCCPayment', array('as' => 'makeCCPayment', 'uses' => 'ShippingsController@makeCCPayment'));
	Route::get('/transSuccess', array('as' => 'transSuccess', 'uses' => 'ShippingsController@transSuccess'));
	Route::get('/alreadyPaid', array('as' => 'alreadyPaid', 'uses' => 'ShippingsController@alreadyPaid'));
	Route::post('/findCustomerEmail', array('as' => 'findCustomerEmail',  'uses' => 'ShippingsController@findCustomerEmail'));

	Route::post('/processPayment', array('as' => 'processPayment', 'uses' => 'CartsController@processPayment'));


	Route::resource('sales', 'SalesController');
	Route::resource('revenue', 'RevenuesController');
	Route::resource('prices', 'PricesController');

	//++++++++++++++IMAGES+++++++++++++++++
	Route::resource('images', 'ImagesController');
	Route::post('images/store', array('as' => 'storeImage', 'uses' => 'ImagesController@newImage'));
	Route::get('/newImage/form', array('as' => 'formnewImage', function(){return View::make('products.newImage');}));
	Route::post('/newImage/make', array('as' => 'newImage', 'uses' => 'ImagesController@newImage'));
	Route::get('/newImage', array('as' => 'shownewImage', 'uses' => 'ImagesController@index'));
	//----------------IMAGES---------------------

	//++++++++++CONTACTS+++++++++++++++++++++++++
	Route::resource('contacts', 'ContactsController');
	Route::resource('bandmembers', 'BandmembersController');
	Route::post('/contact/search', array('as' => 'contactSearch', 'uses' => 'ContactsController@contactSearch'));

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
