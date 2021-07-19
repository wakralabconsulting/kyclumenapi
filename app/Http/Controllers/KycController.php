<?php

namespace App\Http\Controllers;

use App\Kyc;
use Illuminate\Http\Request;

class KycController extends Controller
{

    public function showAllKyc()
    {
        return response()->json(Kyc::all());
    }

    public function showOneKyc($id)
    {
        return response()->json(Kyc::find($id));
    }

    public function create(Request $request)
    {
        $kyc = Kyc::create($request->all());

        return response()->json($kyc, 201);
    }

    public function update($id, Request $request)
    {
        $kyc = Kyc::findOrFail($id);
        $kyc->update($request->all());

        return response()->json($kyc, 200);
    }

    public function delete($id)
    {
        Kyc::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
