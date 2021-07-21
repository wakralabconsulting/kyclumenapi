<?php

namespace App\Http\Controllers;

use App\Companyrepresentatives;
use Illuminate\Http\Request;

class CompanyrepresentativesController extends Controller
{

    public function showAllCompanyrepresentatives()
    {
        return response()->json(Companyrepresentatives::all());
    }

    public function showOneCompanyrepresentatives($id)
    {
        return response()->json(Companyrepresentatives::find($id));
    }

    public function create(Request $request)
    {
        $companyrepresentatives = Companyrepresentatives::create($request->all());
        //$name = $request->input('BID');
        // return response()->json(array($companyrepresentatives,
        // 'BID' => $bid,
        //    'error' => false,
        //    'message' => 'Success'
        // ), 201);
        return response()->json($companyrepresentatives, 201);
            }

    public function update($id, Request $request)
    {
        $companyrepresentatives = Companyrepresentatives::findOrFail($id);
        $companyrepresentatives->update($request->all());

        return response()->json($companyrepresentatives, 200);
    }

    public function delete($id)
    {
        Companyrepresentatives::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
