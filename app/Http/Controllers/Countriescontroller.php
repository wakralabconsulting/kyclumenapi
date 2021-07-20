<?php

namespace App\Http\Controllers;

use App\Countries;
use Illuminate\Http\Request;

class CountriesController extends Controller
{

    public function showAllCountries()
    {
        return response()->json(Countries::all());
    }

    public function showOneCountries($id)
    {
        return response()->json(Countries::find($id));
    }

    public function create(Request $request)
    {
        $countries = Countries::create($request->all());

        return response()->json($countries, 201);
    }

    public function update($id, Request $request)
    {
        $countries = Countries::findOrFail($id);
        $countries->update($request->all());

        return response()->json($countries, 200);
    }

    public function delete($id)
    {
        Countries::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
