<?php

class MusicsController extends \BaseController {

	/**
	 * Display a listing of musics
	 *
	 * @return Response
	 */
	public function index()
	{
		$musics = Music::all();

		return View::make('musics.index', compact('musics'));
	}

	/**
	 * Show the form for creating a new music
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('musics.create');
	}

	/**
	 * Store a newly created music in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Music::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Music::create($data);

		return Redirect::route('musics.index');
	}

	/**
	 * Display the specified music.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$music = Music::findOrFail($id);

		return View::make('musics.show', compact('music'));
	}

	/**
	 * Show the form for editing the specified music.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$music = Music::find($id);

		return View::make('musics.edit', compact('music'));
	}

	/**
	 * Update the specified music in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$music = Music::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Music::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$music->update($data);

		return Redirect::route('musics.index');
	}

	/**
	 * Remove the specified music from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Music::destroy($id);

		return Redirect::route('musics.index');
	}

}
