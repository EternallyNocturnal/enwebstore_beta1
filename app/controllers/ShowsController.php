<?php

class ShowsController extends \BaseController {

	/**
	 * Display a listing of shows
	 *
	 * @return Response
	 */
	public function index()
	{
		$shows = Show::all();

		return View::make('shows.index', compact('shows'));
	}

	/**
	 * Show the form for creating a new show
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('shows.create');
	}

	/**
	 * Store a newly created show in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Show::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Show::create($data);

		return Redirect::route('shows.index');
	}

	/**
	 * Display the specified show.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$show = Show::findOrFail($id);

		return View::make('shows.show', compact('show'));
	}

	/**
	 * Show the form for editing the specified show.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$show = Show::find($id);

		return View::make('shows.edit', compact('show'));
	}

	/**
	 * Update the specified show in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$show = Show::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Show::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$show->update($data);

		return Redirect::route('shows.index');
	}

	/**
	 * Remove the specified show from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Show::destroy($id);

		return Redirect::route('shows.index');
	}

}
