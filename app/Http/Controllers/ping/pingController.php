<?php

namespace App\Http\Controllers\ping;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class pingController extends Controller
{
    public function index()
    {
    	return view('ping_parameter');
    }

    public function coba()
    {
    	return 'coba ini';
    }
}
