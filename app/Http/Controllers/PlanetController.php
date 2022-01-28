<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlanetRequest;
use App\Models\Planet;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = Planet::all();
        return view('planets.index', compact('planets'));
    }

    public function store(PlanetRequest $planetRequest)
    {
        $planet = new Planet;

        $planet->name = $planetRequest->name;
        $planet->en_name = $planetRequest->en_name;
        $planet->radius = $planetRequest->radius;
        $planet->weight = $planetRequest->weight;

        $planet->save();

        return redirect('/planets');
    }

    public function create()
    {
        return view('planets.create');
    }

    public function show(Planet $planet)
    {
        return view('planets.show', compact('planet'));
    }
    
    public function update()
    {
        # code...
    }
    
    public function destroy(Planet $planet)
    {
        $planet->delete();
        return redirect('/planets');
    }
    
    public function edit(Planet $planet)
    {
        return view('planets.edit', compact('planet'));
    }
}
