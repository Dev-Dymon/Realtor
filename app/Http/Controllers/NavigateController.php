<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NavigateController extends Controller
{
    public function index(){
        return view('index');
    }

    public function show_property(){
        return view('properties.property');
    }

    public function show_property_detail(){
        return view('properties.property_details');
    }

    public function contact(){
        return view('contact');
    }
}
