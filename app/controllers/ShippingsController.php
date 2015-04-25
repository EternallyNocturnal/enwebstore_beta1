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
	public function create()
	{

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
			return Redirect::route('makeCCPayment');
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
	public function edit($id)
	{
		$shipping = Shipping::find($id);

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
		$shipping = Shipping::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Shipping::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$shipping->update($data);

		return Redirect::route('shippings.index');
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
