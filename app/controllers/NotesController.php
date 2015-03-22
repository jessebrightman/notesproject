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
		$notes = Notes::all();
		return View::make('userpanel.dashboard')->with('notes', $notes);

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
		$note->images = Img::make(Input::file('images')->getRealPath());
		$note->save();

		return Redirect::to('userpanel.dashboard');
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
		return Redirect::to('userpanel.dashboard')->with('notes', $notes);
	}


}
