<?php

namespace App\Http\Controllers;

use App\Le;
use Illuminate\Http\Request;

class LeController extends Controller
{

    public function showAllLe()
    {
        return response()->json(Le::all());
    }

    public function showOneLe($id)
    {
        return response()->json(Le::find($id));
    }

    public function Create(Request $request)
    {
        $le = Le::Create($request->all());

        return response()->json($le, 201);
    }

    public function update($id, Request $request)
    {
        $le = Le::findOrFail($id);
        $le->update($request->all());

        return response()->json($le, 200);
    }

    public function delete($id)
    {
        Le::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
