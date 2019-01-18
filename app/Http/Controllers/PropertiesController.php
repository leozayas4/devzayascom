<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;

class PropertiesController extends Controller
{

    public function index()
    {
        $properties = Property::all();
        
        return view('properties.index', compact('properties'));
    }


    public function create()
    {
        return view('properties.create');
    }


    public function store()
    {
        //$property = new Property();
        Property::create([
            'job_number' => request('job_number'),
            'job_name' => request('job_name'),
            'address' => request('address'),
            'address2' => request('address2')
         ]);
        
        return redirect('/properties');
    }


    public function show(Property $property)
    {
        //$property = Property::findOrFail($id);
        //return $property;
        return view('properties.show', compact('property'));
    }


    public function edit(Property $property)
    {
        return view('properties.edit', compact('property'));
    }


    public function update(Property $property)
    {
        //$property = Property::findOrFail($id);
        
        $property->update(request([
            'job_number',
            'job_name',
            'address',
            'address2'
        ]));
        
        return redirect('/properties');
        
    }


    public function destroy(Property $property)
    {
        $property->delete();
        return redirect('/properties');
        
    }
}
