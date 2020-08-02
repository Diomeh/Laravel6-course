<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('isadmin');
	}

	public function getProducts()
	{
		return view('admin.products');
	}
}
