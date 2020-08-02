<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('isadmin');
	}

	public function getUsers()
	{
		return view(
			'admin.users.home', 
			['users' => User::orderBy('id', 'Desc')->get()]
		);
	}
}