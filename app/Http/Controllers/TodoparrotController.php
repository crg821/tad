<?php namespace todoparrot\Http\Controllers;

class TodoparrotController extends Controller {

	public function __construct()
	{
		$this->middleware('guest');
	}

	public function index()
	{
		return view('todoparrot');
	}
    
    public function test()
	{
		return view('todoparrot');
	}

}
