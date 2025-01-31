<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
	{
	    $this->middleware('web');
	    $this->middleware('auth');
	    $this->middleware('admin');
	    $this->middleware('checkMail');
	}
}
