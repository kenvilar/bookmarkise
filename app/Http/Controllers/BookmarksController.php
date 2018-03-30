<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookmarksController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		return view('home');
	}

	public function addBookmark(Request $request)
	{
		$this->validate($request, [
			'name' => 'required',
			'url' => 'required',
		]);
	}
}
