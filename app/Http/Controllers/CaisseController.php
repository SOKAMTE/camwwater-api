<?php

namespace App\Http\Controllers;

use App\Models\caisse;
use Illuminate\Http\Request;

class CaisseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $caisses = Caisse::orderBy('created_at', 'DESC')->paginate(1000);
        return response()->json($caisses, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'recette' => 'required|string|max:255',
            'depense' => 'required|string|max:255',
            'encaissement' => 'required|string|max:255',
            'branchement' => 'required|string|max:255',
            'abonnement' => 'required|string|max:255',
        ]);
        $caisse = new Caisse();
        $caisse->recette = $request->recette;
        $caisse->depense = $request->depense;
        $caisse->encaissement = $request->encaissement;
        $caisse->branchement = $request->branchement;
        $caisse->abonnement = $request->abonnement;
        if($caisse->save()) {
            return response()->json($caisse, 200);
        } else {
            return response()->json([
                'message' => 'Some error occured, Please try again',
                'status_code' => 500
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\caisse  $caisse
     * @return \Illuminate\Http\Response
     */
    public function show(caisse $caisse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Request  $request
     * @param  \App\Models\caisse  $caisse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, caisse $caisse)
    {
        $request->validate([
            'recette' => 'required|string|max:255',
            'depense' => 'required|string|max:255',
            'encaissement' => 'required|string|max:255',
            'branchement' => 'required|string|max:255',
            'abonnement' => 'required|string|max:255',
        ]);
        $caisse->recette = $request->recette;
        $caisse->depense = $request->depense;
        $caisse->encaissement = $request->encaissement;
        $caisse->branchement = $request->branchement;
        $caisse->abonnement = $request->abonnement;
        if($caisse->save()) {
            return response()->json($caisse, 200);
        } else {
            return response()->json([
                'message' => 'Some error occured, Please try again',
                'status_code' => 500
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\caisse  $caisse
     * @return \Illuminate\Http\Response
     */
    public function destroy(caisse $caisse)
    {
        if($caisse->delete()) {
            return response()->json([
                'message' => 'Caisse deleted successfully!!!',
                'status_code' => 200
            ], 200);
        } else {
            return response()->json([
                'message' => 'Some error occured, Please try again!!!',
                'status_code' => '500'
            ], 500);
        }
    }
}
