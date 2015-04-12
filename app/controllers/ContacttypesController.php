<?php

class ContacttypesController extends \BaseController {

	/**
	 * Display a listing of contacttypes
	 *
	 * @return Response
	 */
	public function index()
	{
		$contacttypes = Contacttype::all();

		return View::make('contacttypes.index', compact('contacttypes'));
	}

	/**
	 * Show the form for creating a new contacttype
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('contacttypes.create');
	}

	/**
	 * Store a newly created contacttype in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Contacttype::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Contacttype::create($data);

		return Redirect::back();
	}

	/**
	 * Display the specified contacttype.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$contacttype = Contacttype::findOrFail($id);

		return View::make('contacttypes.show', compact('contacttype'));
	}

	/**
	 * Show the form for editing the specified contacttype.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$contacttype = Contacttype::find($id);

		return View::make('contacttypes.edit', compact('contacttype'));
	}

	/**
	 * Update the specified contacttype in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$contacttype = Contacttype::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Contacttype::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$contacttype->update($data);

		return Redirect::route('contacttypes.index');
	}

	/**
	 * Remove the specified contacttype from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Contacttype::destroy($id);

		return Redirect::route('contacttypes.index');
	}

}
