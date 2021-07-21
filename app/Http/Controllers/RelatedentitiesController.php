<?php

namespace App\Http\Controllers;

use App\Relatedentities;
use Illuminate\Http\Request;

class RelatedentitiesController extends Controller
{

    public function showAllRelatedentities()
    {
        return response()->json(Relatedentities::all());
    }

    public function showOneRelatedentities($id)
    {
        return response()->json(Relatedentities::find($id));
    }

    public function create(Request $request)
    {
        $relatedentities = Relatedentities::create($request->all());

        return response()->json($relatedentities, 201);
    }

    public function update($id, Request $request)
    {
        $relatedentities = Relatedentities::findOrFail($id);
        $relatedentities->update($request->all());

        return response()->json($relatedentities, 200);
    }

    public function delete($id)
    {
        Relatedentities::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
