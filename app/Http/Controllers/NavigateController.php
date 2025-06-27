<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use Illuminate\Http\Request;

class NavigateController extends Controller
{
    public function index(){
        return view('index');
    }

    public function show_property(){
        return view('properties.property');
    }

    public function show_property_detail($slug){
        $property = Properties::with('agent')->where('slug', $slug)->firstOrFail();
        // dd($property);
        return view('properties.property_details', compact('property'));
    }

    public function contact(){
        return view('contact');
    }
}
