<?php

class ProductsController extends \BaseController {

	/**
	 * Display a listing of products
	 *
	 * @return Response
	 */

	
	public function commentFeedback()
	{
		Mail::send('emails.feedback', array(), function($message){
			$message->to('feedback@eternallynocturnal.com', "FEEDBACK FROM ".Input::get('name'))->subject('FEEDBACK');
			$message->to('tavares.joe@gmail.com', "FEEDBACK FROM ".Input::get('name'))->subject('FEEDBACK');
		});

		Mail::send('emails.feedbackreply', array(), function($message){
			$message->to(Input::get('email'), "Thanks for your message ".Input::get('name'))->subject('Thank you for your comments!');
		});

		return Redirect::route('products.index');
	}

	public function publicindex()
	{
		$products = Product::all();

		return View::make('products.index', compact('products'));
	}

	public function index()
	{
		$products = Product::all();

		return View::make('products.adminindex', compact('products'));
	}


	public function sortProducts($type){

		$products = Product::where('category', $type)->get();

		return View::make('products.index', compact('products'));
	}

	/**
	 * Show the form for creating a new product
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('products.create');
	}

	/**
	 * Store a newly created product in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		if(Input::file('main_image')){

			$image = Input::file('main_image');
	            $filename  = Input::get('name') . '.' . $image->getClientOriginalExtension();
	            $newimg = Imager::make($image)->resize(null, 700, function ($constraint) {$constraint->aspectRatio();})->save(public_path().'/images/products/'.$filename);
	            $newthumb = Imager::make($image)->resize(null, 150, function ($constraint) {$constraint->aspectRatio();})->save(public_path().'/thumbs/products/'.$filename);
		}

		$validator = Validator::make($data = Input::except('main_image'), Product::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Product::create($data);

		return Redirect::route('products.index');
	}

	public function newProductCat()
	{
		$validator = Validator::make($data = Input::all(), Productcat::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Productcat::create($data);

		return Redirect::route('products.create');
	}

	/**
	 * Display the specified product.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$product = Product::findOrFail($id);

		return View::make('products.show', compact('product'));
	}

	/**
	 * Show the form for editing the specified product.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$product = Product::find($id);

		return View::make('products.edit', compact('product'));
	}

	/**
	 * Update the specified product in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$product = Product::findOrFail($id);


		$validator = Validator::make($data = Input::all(), Product::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$product->update($data);

		$inventory = Inventory::where('product_id', $id)->first();

		$inventory->xsmall = Input::get('xsmall_inv');
		$inventory->small = Input::get('small_inv');
		$inventory->medium = Input::get('medium_inv');
		$inventory->large = Input::get('large_inv');
		$inventory->xlarge = Input::get('xlarge_inv');
		$inventory->xxlarge = Input::get('xxlarge_inv');
		$inventory->xxxlarge = Input::get('xxxlarge_inv');
		$inventory->onesize = Input::get('onesize_inv');

		$inventory->save();

		return Redirect::route('productManager');
	}

	/**
	 * Remove the specified product from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Product::destroy($id);

		return Redirect::route('products.index');
	}

}
