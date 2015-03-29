<?php

class SalesController extends \BaseController {

	/**
	 * Display a listing of sales
	 *
	 * @return Response
	 */
	public function index()
	{
		$sales = Sale::all();

		return View::make('sales.index', compact('sales'));
	}

	public function doPayment()
	{
				// Set your secret key: remember to change this to your live secret key in production
				// See your keys here https://dashboard.stripe.com/account/apikeys
				Stripe::setApiKey("sk_test_6Xjx7CIZfR3MqgsQKNsVF1vf");

				// Get the credit card details submitted by the form
				$token = Input::get('stripeToken');

		// Create the charge on Stripe's servers - this will charge the user's card
		try {
		$charge = Stripe_Charge::create(array(
		  "amount" => Input::get('data-description'), // amount in cents, again
		  "currency" => "usd",
		  "source" => $token,
		  "description" => "payinguser@example.com")
		);
	} catch(\Stripe\Error\Card $e) {
	  // The card has been declined
	}

		return View::make('shoppers.createPaymentForm');
	}






	/**
	 * Show the form for creating a new sale
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sales.create');
	}

	/**
	 * Store a newly created sale in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Sale::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Sale::create($data);

		return Redirect::route('sales.index');
	}

	/**
	 * Display the specified sale.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$sale = Sale::findOrFail($id);

		return View::make('sales.show', compact('sale'));
	}

	/**
	 * Show the form for editing the specified sale.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$sale = Sale::find($id);

		return View::make('sales.edit', compact('sale'));
	}

	/**
	 * Update the specified sale in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$sale = Sale::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Sale::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$sale->update($data);

		return Redirect::route('sales.index');
	}

	/**
	 * Remove the specified sale from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Sale::destroy($id);

		return Redirect::route('sales.index');
	}

}
