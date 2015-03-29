<?php

class BandsController extends \BaseController {

	/**
	 * Display a listing of bands
	 *
	 * @return Response
	 */
	public function index()
	{
		$bands = Band::all();

		return View::make('bands.index', compact('bands'));
	}

	/**
	 * Show the form for creating a new band
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('bands.create');
	}

	/**
	 * Store a newly created band in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Band::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Band::create($data);

		return Redirect::route('bands.index');
	}

	/**
	 * Display the specified band.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$band = Band::findOrFail($id);

		return View::make('bands.show', compact('band'));
	}

	/**
	 * Show the form for editing the specified band.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$band = Band::find($id);

		return View::make('bands.edit', compact('band'));
	}

	/**
	 * Update the specified band in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$band = Band::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Band::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$band->update($data);

		return Redirect::route('bands.index');
	}

	/**
	 * Remove the specified band from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Band::destroy($id);

		return Redirect::route('bands.index');
	}

}
