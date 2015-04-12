<?php

class BandmembersController extends \BaseController {

	/**
	 * Display a listing of bandmembers
	 *
	 * @return Response
	 */
	public function index()
	{
		$bandmembers = Bandmember::all();

		return View::make('bandmembers.index', compact('bandmembers'));
	}

	/**
	 * Show the form for creating a new bandmember
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('bandmembers.create');
	}

	/**
	 * Store a newly created bandmember in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Bandmember::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Bandmember::create($data);

		return Redirect::route('bandmembers.index');
	}

	/**
	 * Display the specified bandmember.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$bandmember = Bandmember::findOrFail($id);

		return View::make('bandmembers.show', compact('bandmember'));
	}

	/**
	 * Show the form for editing the specified bandmember.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$bandmember = Bandmember::find($id);

		return View::make('bandmembers.edit', compact('bandmember'));
	}

	/**
	 * Update the specified bandmember in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$bandmember = Bandmember::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Bandmember::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$bandmember->update($data);

		return Redirect::route('bandmembers.index');
	}

	/**
	 * Remove the specified bandmember from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Bandmember::destroy($id);

		return Redirect::route('bandmembers.index');
	}

}
