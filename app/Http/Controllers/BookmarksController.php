<?php

namespace App\Http\Controllers;

use App\Bookmark;
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

		$bookmark = new Bookmark;
		$bookmark->user_id = auth()->user()->id;
		$bookmark->name = $request->input('name');
		$bookmark->url = $request->input('url');
		$bookmark->description = $request->input('description');
		$bookmark->save();

		return redirect('home')->with('success', 'Created bookmark successfully!');
	}
}
