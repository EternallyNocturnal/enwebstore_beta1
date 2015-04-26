<?php
Use \Stripe\Stripe;
Use \Stripe\Charge;
Use \Stripe\Error;

class CartsController extends \BaseController {

	/**
	 * Display a listing of carts
	 *
	 * @return Response
	 */

	public function processPayment()
	{

		if(Shipping::where('cart_id', Session::get('cart_id'))->pluck('payment_status') == 'Paid'){
				return Redirect::route('alreadyPaid');
			}else{
				// Set your secret key: remember to change this to your live secret key in production
				// See your keys here https://dashboard.stripe.com/account/apikeys
				Stripe::setApiKey("sk_test_6Xjx7CIZfR3MqgsQKNsVF1vf");

				// Get the credit card details submitted by the form
				$token = Input::get('stripeToken');

		// Create the charge on Stripe's servers - this will charge the user's card
		try {
		$charge = Charge::create(array(
		  "amount" => Input::get('data-description'), // amount in cents, again
		  "currency" => "usd",
		  "source" => $token,
		  "description" => Session::get('cart_id'))
		);
	} catch(\Stripe\Error\Card $e) {
	  // The card has been declined
	}

			$markPaid = Shipping::where('cart_id', Session::get('cart_id'))->first();
			$markPaid->payment_status = 'Paid';
			$markPaid->shipped_status = 'Not Shipped';

			$markPaid->save();

			Session::forget('cart_id');
			Session::forget('paymentAmt');
			return Redirect::route('transSuccess');
		}
	}


	public function checkOut()
	{
		$checkoutAmt = Input::get('checkoutAmt');
		Session::put('checkoutAmt', $checkoutAmt);
		return Redirect::route('shippings.create');
	}

	public function addToCart()
	{	
		// Session::forget('cart_id');
		if(Session::get('cart_id')){
			$customer_id = Session::get('cart_id');
		}else{
		$customer_id = Str::random(50);
		}
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
			$cart->customer_id = $customer_id;
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
		Session::forget('checkoutAmt');
		Session::forget('cart_id');
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
