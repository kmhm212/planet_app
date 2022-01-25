<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlanetRequest as RequestsPlanetRequest;
use Illuminate\Requests\PlanetRequest;
use App\Models\Planet;

class PlanetController extends Controller
{
    public function index()
    {
        $planets = Planet::all();
        return view('planets.index', compact('planets'));
    }

    public function store()
    {
        
    }

    public function create()
    {
        # code...
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
