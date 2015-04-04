<?php

class ImagesController extends \BaseController {

	/**
	 * Display a listing of images
	 *
	 * @return Response
	 */
	public function index()
	{
		$images = Imager::all();

		return View::make('images.index', compact('images'));
	}

	/**
	 * Show the form for creating a new image
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('images.create');
	}

	public function newImage()
	{

			$image = Input::file('image');
	        $filename  = Input::get('product_id') . '_' . Str::random(5) . '.' . $image->getClientOriginalExtension();
	        $newimg = Image::make($image)->resize(null, 700, function ($constraint) {$constraint->aspectRatio();})->save(public_path().'/images/products/'.$filename);
	        $newthumb = Image::make($image)->resize(null, 150, function ($constraint) {$constraint->aspectRatio();})->save(public_path().'/thumbs/products/'.$filename);
		
		Imager::create(array(
			'product_id' => Input::get('product_id'),
			'name' => $filename,
			'location' => $filename,
			));

		return Redirect::route('productManager');

	}

	/**
	 * Store a newly created image in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Imager::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Imager::create($data);

		return Redirect::route('images.index');
	}

	/**
	 * Display the specified image.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$image = Imager::findOrFail($id);

		return View::make('images.show', compact('image'));
	}

	/**
	 * Show the form for editing the specified image.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$image = Imager::find($id);

		return View::make('images.edit', compact('image'));
	}

	/**
	 * Update the specified image in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$image = Imager::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Imager::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$image->update($data);

		return Redirect::route('images.index');
	}

	/**
	 * Remove the specified image from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Imager::destroy($id);

		return Redirect::route('images.index');
	}

}
