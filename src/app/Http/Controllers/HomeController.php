<?php

namespace App\Http\Controllers;

use App\Models\Builder;
use App\Models\Building;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $buildings = Building::all();

        return view('home', compact('buildings'));
    }

    public function create()
    {
        $builders = Builder::all();
        return view('create', compact('builders'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'city' => 'required|string',
            'street' => 'required|string',
            'building_number' => 'required|string',
            'build_year' => 'required|integer',
            'wallType' => 'required|string',
            'heating' => 'required|string',
            'status' => 'required|string',
            'builder_id' => 'integer'
        ]);

        $builderId = intval($validatedData['builder_id']);

        $building = new Building($validatedData);
        $building->user_id = auth()->user()->id;
        $building->builder_id = $builderId;
        $building->save();

        return redirect()->route('home');
    }

    public function destroy(Building $building)
    {
        $building->delete();

        return redirect()->route('home');
    }

    public function edit(Building $building)
    {
        return view('edit', compact('building'));
    }

    public function update(Request $request, Building $building)
    {
        $validatedData = $request->validate([
            'city' => 'required|string',
            'street' => 'required|string',
            'building_number' => 'required|string',
            'build_year' => 'required|integer',
            'wallType' => 'required|string',
            'heating' => 'required|string',
            'status' => 'required|string',
        ]);

        $building->update($validatedData);

        return redirect()->route('home');
    }

    public function getBuilderDetails(Request $request)
    {
        $builderId = $request->input('builder_id');

        $builder = Builder::find($builderId);

        return response()->json([
            'city' => $builder->city,
            'street' => $builder->street,
            'building_number' => $builder->building_number,
            'wallType' => $builder->wallType,
            'heating' => $builder->heating
        ]);
    }
}
