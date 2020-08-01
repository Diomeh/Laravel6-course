<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConnectController extends Controller
{

    public function __construct() {
        // Prevent users from accessing guest operations
        $this->middleware('guest')->except(['getLogout']);
    }

    public function getLogin()
    {
    	return view('connect.login');
    }
}
