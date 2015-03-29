<?php

class RevenuesController extends \BaseController {

	/**
	 * Display a listing of revenues
	 *
	 * @return Response
	 */
	public function index()
	{
		$revenues = Revenue::all();

		return View::make('revenues.index', compact('revenues'));
	}

	/**
	 * Show the form for creating a new revenue
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('revenues.create');
	}

	/**
	 * Store a newly created revenue in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Revenue::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Revenue::create($data);

		return Redirect::route('revenues.index');
	}

	/**
	 * Display the specified revenue.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$revenue = Revenue::findOrFail($id);

		return View::make('revenues.show', compact('revenue'));
	}

	/**
	 * Show the form for editing the specified revenue.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$revenue = Revenue::find($id);

		return View::make('revenues.edit', compact('revenue'));
	}

	/**
	 * Update the specified revenue in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$revenue = Revenue::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Revenue::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$revenue->update($data);

		return Redirect::route('revenues.index');
	}

	/**
	 * Remove the specified revenue from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Revenue::destroy($id);

		return Redirect::route('revenues.index');
	}

}
