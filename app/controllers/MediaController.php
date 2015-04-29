<?php

class MediaController extends \BaseController {

	/**
	 * Display a listing of media
	 *
	 * @return Response
	 */
	public function index()
	{
		$media = Medium::all();

		return View::make('media.index', compact('media'));
	}

	/**
	 * Show the form for creating a new medium
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('media.create');
	}

	/**
	 * Store a newly created medium in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Medium::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Medium::create($data);

		return Redirect::route('media.index');
	}

	/**
	 * Display the specified medium.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$medium = Medium::findOrFail($id);

		return View::make('media.show', compact('medium'));
	}

	/**
	 * Show the form for editing the specified medium.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$medium = Medium::find($id);

		return View::make('media.edit', compact('medium'));
	}

	/**
	 * Update the specified medium in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$medium = Medium::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Medium::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$medium->update($data);

		return Redirect::route('media.index');
	}

	/**
	 * Remove the specified medium from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Medium::destroy($id);

		return Redirect::route('media.index');
	}

}
