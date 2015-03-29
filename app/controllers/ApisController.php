<?php

class ApisController extends \BaseController {

	/**
	 * Display a listing of apis
	 *
	 * @return Response
	 */
	public function index()
	{
		$apis = Api::all();

		return View::make('apis.index', compact('apis'));
	}

	/**
	 * Show the form for creating a new api
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('apis.create');
	}

	/**
	 * Store a newly created api in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Api::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Api::create($data);

		return Redirect::route('apis.index');
	}

	/**
	 * Display the specified api.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$api = Api::findOrFail($id);

		return View::make('apis.show', compact('api'));
	}

	/**
	 * Show the form for editing the specified api.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$api = Api::find($id);

		return View::make('apis.edit', compact('api'));
	}

	/**
	 * Update the specified api in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$api = Api::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Api::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$api->update($data);

		return Redirect::route('apis.index');
	}

	/**
	 * Remove the specified api from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Api::destroy($id);

		return Redirect::route('apis.index');
	}

}
