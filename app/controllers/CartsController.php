<?php

class CartsController extends \BaseController {

	/**
	 * Display a listing of carts
	 *
	 * @return Response
	 */

	public function addToCart()
	{	
		// Session::forget('cart_id');
		$customer_id = Input::get('_token');
		$item = Input::get('addID');
		$size = Input::get('size');

		Session::put('cart_id', $customer_id);

		if(Cart::where('customer_id', $customer_id)->where('item', $item)->where('size', $size)->pluck('quantity')){
			$quantit = Cart::where('customer_id', $customer_id)->where('item', $item)->where('size', $size)->pluck('quantity');

			$cart = Cart::where('customer_id', $customer_id)->where('item', $item)->where('size', $size)->first();

			$cart->customer_id = $customer_id;
			$cart->item = $item;
			$cart->size = $size;
			$cart->quantity = $quantit+1;

			$cart->save();
		}else{
			$cart = new Cart;
			$cart->customer_id = Input::get('_token');
			$cart->item = Input::get('addID');
			$cart->size = Input::get('size');
			$cart->quantity = 1;

			$cart->save();
		}
		return Redirect::route('PublicIndex');
	}

	public function removeFromCart()
	{
		$item = Input::get('remID');
		$customer_id = Session::get('cart_id');
			Cart::destroy($item);

		return Redirect::route('PublicIndex');
	}
	
	public function emptyCart()
	{
		$customer_id = Session::get('cart_id');
		foreach(Cart::where('customer_id', $customer_id)->get() as $cart){
			Cart::destroy($cart->id);
		} 
		return Redirect::route('PublicIndex');
	}




	public function index()
	{
		$wholecarts = Cart::where('customer_id', Session::get('cart_id'))->get();

		return View::make('carts.index', compact('wholecarts'));
	}

	/**
	 * Show the form for creating a new cart
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('carts.create');
	}

	/**
	 * Store a newly created cart in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Cart::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Cart::create($data);

		return Redirect::route('carts.index');
	}

	/**
	 * Display the specified cart.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$cart = Cart::findOrFail($id);

		return View::make('carts.show', compact('cart'));
	}

	/**
	 * Show the form for editing the specified cart.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$cart = Cart::find($id);

		return View::make('carts.edit', compact('cart'));
	}

	/**
	 * Update the specified cart in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$cart = Cart::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Cart::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$cart->update($data);

		return Redirect::route('carts.index');
	}

	/**
	 * Remove the specified cart from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Cart::destroy($id);

		return Redirect::route('carts.index');
	}

}
