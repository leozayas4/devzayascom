<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;

class PropertiesController extends Controller
{
    public function index() {
        
        $properties = Property::all();
        
        return view('properties.index', compact('properties'));
                    
    }
    
    
    public function create() {
        
        return view('properties.create');
    }
}
