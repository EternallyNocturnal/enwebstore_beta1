<?php

class ProductsadminsController extends \BaseController {

	/**
	 * Display a listing of productsadmins
	 *
	 * @return Response
	 */
	public function index()
	{
		$products = Product::all();

		return View::make('productsadmins.index', compact('products'));
	}

	/**
	 * Show the form for creating a new productsadmin
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('productsadmins.create');
	}

	/**
	 * Store a newly created productsadmin in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Productsadmin::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Productsadmin::create($data);

		return Redirect::route('productsadmins.index');
	}

	/**
	 * Display the specified productsadmin.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$productsadmin = Productsadmin::findOrFail($id);

		return View::make('productsadmins.show', compact('productsadmin'));
	}

	/**
	 * Show the form for editing the specified productsadmin.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$productsadmin = Productsadmin::find($id);

		return View::make('productsadmins.edit', compact('productsadmin'));
	}

	/**
	 * Update the specified productsadmin in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$productsadmin = Productsadmin::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Productsadmin::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$productsadmin->update($data);

		return Redirect::route('productsadmins.index');
	}

	/**
	 * Remove the specified productsadmin from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Productsadmin::destroy($id);

		return Redirect::route('productsadmins.index');
	}

}
