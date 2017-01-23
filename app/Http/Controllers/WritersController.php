<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WritersController extends Controller
{
    public function index() {
    	return view ('writers.writer')
    }
}
