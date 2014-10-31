<?php

class ContentController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$contents = Content::paginate(5);

		return View::make('contents.index', compact('contents'));
	}

	public function search()
	{
		$search = Input::get('search');
		$contents = Content::where('title', 'LIKE', "%$search%")->paginate(5);

		return View::make('contents.index', compact('contents'));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('contents.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// content data
		$data = [
			'title' => Input::get('title'),
			'text'  => Input::get('text'),
			'slug'  => Content::slugify(Input::get('title'))
		];

		$rules = [
			'title' => 'required',
			'text' => 'required'
		];
		$validation = Validator::make($data, $rules);
		if($validation->passes())
		{
			// new Instance of content Model
			$content = new Content($data);
			$user = Auth::user(); // User in session
			// Create related content model
			$createdcontent = $user->content()->save($content);

			return Redirect::route('contents.index');
		}

		return Redirect::back()->withErrors($validation)->withInput();
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$contents = Content::where('slug', $id)->first();

		return View::make('contents.show', compact('contents'));
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
