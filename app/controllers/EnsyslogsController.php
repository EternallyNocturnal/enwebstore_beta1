<?php

class EnsyslogsController extends \BaseController {

	/**
	 * Display a listing of ensyslogs
	 *
	 * @return Response
	 */
	public function index()
	{
		$ensyslogs = Ensyslog::all();

		return View::make('ensyslogs.index', compact('ensyslogs'));
	}

	/**
	 * Show the form for creating a new ensyslog
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('ensyslogs.create');
	}

	/**
	 * Store a newly created ensyslog in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Ensyslog::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Ensyslog::create($data);

		return Redirect::route('ensyslogs.index');
	}

	/**
	 * Display the specified ensyslog.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$ensyslog = Ensyslog::findOrFail($id);

		return View::make('ensyslogs.show', compact('ensyslog'));
	}

	/**
	 * Show the form for editing the specified ensyslog.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$ensyslog = Ensyslog::find($id);

		return View::make('ensyslogs.edit', compact('ensyslog'));
	}

	/**
	 * Update the specified ensyslog in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$ensyslog = Ensyslog::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Ensyslog::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$ensyslog->update($data);

		return Redirect::route('ensyslogs.index');
	}

	/**
	 * Remove the specified ensyslog from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Ensyslog::destroy($id);

		return Redirect::route('ensyslogs.index');
	}

}
