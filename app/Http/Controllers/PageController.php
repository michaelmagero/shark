<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function index() {
    	return view ('pages.home')
    }

    public function service() {
    	return view ('pages.services')
    }

    public function how() {
    	return view ('pages.how')
    }

    public function pricing() {
    	return view ('pages.pricing')
    }

    public function contact() {
    	return view ('pages.contact')
    }
}
