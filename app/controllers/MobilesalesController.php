<?php

class MobilesalesController extends \BaseController {

	/**
	 * Display a listing of mobilesales
	 *
	 * @return Response
	 */
	public function index()
	{
	

		return View::make('mobilesales.index', compact('mobilesales'));
	}

	/**
	 * Show the form for creating a new music
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('mobilesales.create');
	}

	/**
	 * Store a newly created music in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Mobilesale::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Mobilesale::create($data);

		return Redirect::route('mobilesales.index');
	}

	/**
	 * Display the specified music.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$music = Mobilesale::findOrFail($id);

		return View::make('mobilesales.show', compact('music'));
	}

	/**
	 * Show the form for editing the specified music.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$music = Mobilesale::find($id);

		return View::make('mobilesales.edit', compact('music'));
	}

	/**
	 * Update the specified music in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
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

		return Redirect::route('mobilesales.index');
	}

	/**
	 * Remove the specified music from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Mobilesale::destroy($id);

		return Redirect::route('mobilesales.index');
	}

	public function updateInv(){
		$inventory = Inventory::where('product_id', Input::get('id'))->first();
		
		$inventory->xsmall = Input::get('xsmall_inv');
		$inventory->small = Input::get('small_inv');
		$inventory->medium = Input::get('medium_inv');
		$inventory->large = Input::get('large_inv');
		$inventory->xlarge = Input::get('xlarge_inv');
		$inventory->xxlarge = Input::get('xxlarge_inv');
		$inventory->xxxlarge = Input::get('xxxlarge_inv');
		$inventory->onesize = Input::get('onesize_inv');

		$inventory->save();

		return ('success!');
	}

}
