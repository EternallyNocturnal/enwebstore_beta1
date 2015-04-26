<?php

class ShippingsController extends \BaseController {

	/**
	 * Display a listing of shippings
	 *
	 * @return Response
	 */
	public function index()
	{
		$shippings = Shipping::all();

		return View::make('shippings.index', compact('shippings'));
	}

	/**
	 * Show the form for creating a new shipping
	 *
	 * @return Response
	 */

	public function goBack(){
		return Redirect::back();
	}
	public function create()
	{	
		if(Shipping::where('cart_id', Session::get('cart_id'))->pluck('cart_id') > ''){
		return Redirect::route('shippings.edit');
		}
		return View::make('shippings.create');
	}

	public function transSuccess()
	{

		return View::make('carts.Success');
	}

	public function alreadyPaid()
	{

		return View::make('carts.alreadyPaid');
	}

	/**
	 * Store a newly created shipping in storage.
	 *
	 * @return Response
	 */
	public function store()
	{

		if(Shipping::where('cart_id', Session::get('cart_id'))->pluck('payment_status') == 'Paid'){
				return Redirect::route('alreadyPaid');
		}elseif(Shipping::where('cart_id', Session::get('cart_id'))->pluck('cart_id') > ''){
			$cart = Shipping::where('cart_id', Session::get('cart_id'))->first();

			$cart->email = Input::get('email');
			$cart->phone = Input::get('phone');
			$cart->ship_f_name = Input::get('ship_f_name');
			$cart->ship_l_name = Input::get('ship_l_name');
			$cart->address1 = Input::get('ship_address1');
			$cart->address2 = Input::get('ship_address2');
			$cart->city = Input::get('ship_city');
			$cart->state = Input::get('ship_state');
			$cart->zip = Input::get('ship_zip');
			$cart->cart_amt = Session::get('checkoutAmt');

			$cart->save();

			return  Redirect::route('makeCCPayment');

		}else{
		$validator = Validator::make($data = Input::all(), Shipping::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Shipping::create($data);

		return Redirect::route('makeCCPayment');
		}
	}

	public function makeCCPayment()
	{

		return View::make('shippings.makePayment');
	}

	/**
	 * Display the specified shipping.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$shipping = Shipping::findOrFail($id);

		return View::make('shippings.show', compact('shipping'));
	}

	/**
	 * Show the form for editing the specified shipping.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit()
	{
		$shipping = Shipping::where('cart_id', Session::get('cart_id'))->first();

		return View::make('shippings.edit', compact('shipping'));
	}

	/**
	 * Update the specified shipping in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$shipping = Shipping::where('cart_id', $id)->first();

		$validator = Validator::make($data = Input::all(), Shipping::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$shipping->update($data);

		return Redirect::route('makeCCPayment');
	}

	/**
	 * Remove the specified shipping from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Shipping::destroy($id);

		return Redirect::route('shippings.index');
	}

}