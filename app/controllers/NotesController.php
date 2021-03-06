<?php

class NotesController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$id = Confide::user()->id;
		$notes = Notes::where('user_id', $id)->get();
		$images = Images::where('user_id', $id)->get();
		$links = Links::where('user_id', $id)->get();
		return View::make('dashboard')->with('notes', $notes)->with('images', $images)->with('links', $links);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function image($id)
	{
		//
		$images = Images::where('id', $id)->get();
		return View::make('image')->with('images', $images);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		// store
		$id = Confide::user()->id;
		$notes = Notes::where('user_id', $id)->first();
		$linkid = Input::get('linkid');
		$links = Links::where('id', $linkid)->first();
		$updatelinks = DB::table('links')->where('user_id', "=", $id)->get();
		$imgNum = DB::table('images')->where('user_id', "=", $id)->get();
		$rules = array('file' => 'mimes:jpg,gif');
		$messages = array('');
		$customAttributes = array('');
		$newImage = array(Input::get('images'));
		$validator = Validator::make($newImage, $rules, $messages, $customAttributes);

		if($notes == null) {
			$note = new Notes();
			$note->user_id = Confide::user()->id;
			$note->notes = Input::get('notes');
			$note->tbd = Input::get('tbd');
			$note->save();

			if($links != null)
			{
				$link = Links::where('id', $linkid)->first();
				$link->user_id = $id;
				$link->hyperlinks = Input::get("hyperlinks.$linkid");
				$link->save();
			}
			else
			{
				$link = new Links();
				$link->user_id = $id;
				$link->hyperlinks = Input::get('newhyperlinks');
				$link->save();
			}
			if ((Input::file('images') != null) && (count($imgNum) <= 3) && ($validator->passes()))
			{
				$f = Input::file('images');
				$image = new Images();
				$image->user_id = $id;
				$image->image_path = $f->getClientOriginalName();
				$image->images = base64_encode(file_get_contents($f->getRealPath()));
				$image->save();

				return Redirect::to('dashboard');
			}
			else
			{
				return Redirect::to('dashboard');
			}
		}

		elseif($notes != null)
		{
			$note = Notes::where('user_id', $id)->first();
			$note->user_id = $id;
			$note->notes = Input::get('notes');
			$note->tbd = Input::get('tbd');
			$note->save();

			if($links != null)
			{
				$link = Links::where('id', $linkid)->first();
				$link->user_id = $id;
				$link->hyperlinks = Input::get("hyperlinks.$linkid");
				$link->save();
			}
			else
			{
				$link = new Links();
				$link->user_id = $id;
				$link->hyperlinks = Input::get('newhyperlinks');
				$link->save();
			}
			if((Input::file('images') != null) && (count($imgNum) <= 3) && (!$validator->passes()))
			{
				$f = Input::file('images');
				$image = new Images();
				$image->user_id = $id;
				$image->image_path = $f->getClientOriginalName();
				$image->images = base64_encode(file_get_contents($f->getRealPath()));
				$image->save();

				return Redirect::to('dashboard');
			}
			else{
				return Redirect::to('dashboard');
			}
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
	public function update()
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
	$link = Links::find($id);
	$link->delete();

	// redirect
	return Redirect::to('dashboard');
}
	public function destroyImage($id)
	{
		//
		$images = Images::find($id);
		$images->delete();

		// redirect
		return Redirect::to('dashboard');
	}

}
