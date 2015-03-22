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
		return View::make('dashboard')->with('notes', $notes)->with('images', $images);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
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

		$note = new Notes();
		$note->user_id = Confide::user()->id;
		$note->notes = Input::get('notes');
		$note->tbd = Input::get('tbd');
		$note->hyperlinks = Input::get('hyperlinks');
		$note->save();

		return Redirect::to('dashboard');
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
		$notes = Notes::find($id);
		$notes->delete();

		// redirect
		return Redirect::to('dashboard');
	}


}
