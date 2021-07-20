<?php

namespace App\Http\Controllers;

use App\Cities;
use Illuminate\Http\Request;

class CitiesController extends Controller
{

    public function showAllCities()
    {
        return response()->json(Cities::all());
    }

    public function showOneCities($id)
    {
        return response()->json(Cities::find($id));
    }

    public function create(Request $request)
    {
        $cities = Cities::create($request->all());

        return response()->json($cities, 201);
    }

    public function update($id, Request $request)
    {
        $cities = Cities::findOrFail($id);
        $cities->update($request->all());

        return response()->json($cities, 200);
    }

    public function delete($id)
    {
        Cities::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
