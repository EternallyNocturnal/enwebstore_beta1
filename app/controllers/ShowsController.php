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
		$validator = Validator::make($data = Input::except('_token', 'main_image'), Show::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}


		$newshow = new Show;

		$newshow->name = Input::get('name');
		$newshow->venue_id = Input::get('venue_id');
		$newshow->contact_id = Input::get('contact_id');
		$newshow->presale_price = Input::get('presale_price');
		$newshow->presale_count = Input::get('presale_count');
		$newshow->door_price = Input::get('door_price');
		$newshow->start_time = Input::get('start_time');
		$newshow->end_time = Input::get('end_time');

		$newshow->save();

		if(Input::file('main_image')){

			$image = Input::file('main_image');
	            $filename  = Input::get('name') . '_show.' . $image->getClientOriginalExtension();
	            $newimg = Image::make($image)->resize(null, 700, function ($constraint) {$constraint->aspectRatio();})->save(public_path().'/images/products/'.$filename);
	            $newthumb = Image::make($image)->resize(null, 150, function ($constraint) {$constraint->aspectRatio();})->save(public_path().'/thumbs/products/'.$filename);
	        DB::table('shows')->where('id', $newshow->id)->update(array('main_image' => $filename));
		}

		return Redirect::route('productManager');
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

		$validator = Validator::make($data = Input::except('_token', 'main_image'), Show::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		if(Input::file('main_image')){

			$image = Input::file('main_image');
	            $filename  = Input::get('name') . '_show.' . $image->getClientOriginalExtension();
	            $newimg = Image::make($image)->resize(null, 700, function ($constraint) {$constraint->aspectRatio();})->save(public_path().'/images/products/'.$filename);
	            $newthumb = Image::make($image)->resize(null, 150, function ($constraint) {$constraint->aspectRatio();})->save(public_path().'/thumbs/products/'.$filename);
	        DB::table('shows')->where('id', $show->id)->update(array('main_image' => $filename));
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
