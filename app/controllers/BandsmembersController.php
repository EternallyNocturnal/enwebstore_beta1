<?php

class BandsmembersController extends \BaseController {

	/**
	 * Display a listing of bandsmembers
	 *
	 * @return Response
	 */
	public function index()
	{
		$bandsmembers = Bandsmember::all();

		return View::make('bandsmembers.index', compact('bandsmembers'));
	}

	/**
	 * Show the form for creating a new bandsmember
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('bandsmembers.create');
	}

	/**
	 * Store a newly created bandsmember in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Bandsmember::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Bandsmember::create($data);

		return Redirect::route('bandsmembers.index');
	}

	/**
	 * Display the specified bandsmember.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$bandsmember = Bandsmember::findOrFail($id);

		return View::make('bandsmembers.show', compact('bandsmember'));
	}

	/**
	 * Show the form for editing the specified bandsmember.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$bandsmember = Bandsmember::find($id);

		return View::make('bandsmembers.edit', compact('bandsmember'));
	}

	/**
	 * Update the specified bandsmember in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$bandsmember = Bandsmember::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Bandsmember::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$bandsmember->update($data);

		return Redirect::route('bandsmembers.index');
	}

	/**
	 * Remove the specified bandsmember from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Bandsmember::destroy($id);

		return Redirect::route('bandsmembers.index');
	}

}
