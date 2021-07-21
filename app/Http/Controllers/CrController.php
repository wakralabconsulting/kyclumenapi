<?php

namespace App\Http\Controllers;

use App\Cr;
use Illuminate\Http\Request;

class CrController extends Controller
{

    public function showAllCr()
    {
        return response()->json(Cr::all());
    }

    public function showOneCr($id)
    {
        return response()->json(Cr::find($id));
    }

    public function create(Request $request)
    {
        $cr = Cr::create($request->all());

        return response()->json($cr, 201);
    }

    public function update($id, Request $request)
    {
        $cr = Cr::findOrFail($id);
        $cr->update($request->all());

        return response()->json($cr, 200);
    }

    public function delete($id)
    {
        Cr::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
