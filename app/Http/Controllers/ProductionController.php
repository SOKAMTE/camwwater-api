<?php

namespace App\Http\Controllers;

use App\Models\production;
use Illuminate\Http\Request;

class ProductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productions = Production::orderBy('created_at', 'DESC')->paginate(1000);
        return response()->json($productions, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'eau_brute' => 'required|string|max:255',
            'eau_traite' => 'required|string|max:255',
            'pompe_lavage' => 'required|string|max:255',
            'horaire_agitateur' => 'required|string|max:255',
            'horaire_pompe_doseuse' => 'required|string|max:255',
            'horaire_pompe_refoulement' => 'required|string|max:255',
            'stock_produit' => 'required|string|max:255',
            'index_eneo' => 'required|string|max:255',
        ]);
        $production = new Production();
        $production->eau_brute = $request->eau_brute;
        $production->eau_traite = $request->eau_traite;
        $production->pompe_lavage = $request->pompe_lavage;
        $production->horaire_agitateur = $request->horaire_agitateur;
        $production->horaire_pompe_doseuse = $request->horaire_pompe_doseuse;
        $production->horaire_pompe_refoulement = $request->horaire_pompe_refoulement;
        $production->stock_produit = $request->stock_produit;
        $production->index_eneo = $request->index_eneo;
        if($production->save()) {
            return response()->json($production, 200);
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
     * @param  \App\Models\production  $production
     * @return \Illuminate\Http\Response
     */
    public function show(production $production)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Request  $request
     * @param  \App\Models\production  $production
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, production $production)
    {
        $request->validate([
            'eau_brute' => 'required|string|max:255',
            'eau_traite' => 'required|string|max:255',
            'pompe_lavage' => 'required|string|max:255',
            'horaire_agitateur' => 'required|string|max:255',
            'horaire_pompe_doseuse' => 'required|string|max:255',
            'horaire_pompe_refoulement' => 'required|string|max:255',
            'stock_produit' => 'required|string|max:255',
            'index_eneo' => 'required|string|max:255',
        ]);
        $production->eau_brute = $request->eau_brute;
        $production->eau_traite = $request->eau_traite;
        $production->pompe_lavage = $request->pompe_lavage;
        $production->horaire_agitateur = $request->horaire_agitateur;
        $production->horaire_pompe_doseuse = $request->horaire_pompe_doseuse;
        $production->horaire_pompe_refoulement = $request->horaire_pompe_refoulement;
        $production->stock_produit = $request->stock_produit;
        $production->index_eneo = $request->index_eneo;
        if($production->save()) {
            return response()->json($production, 200);
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
     * @param  \App\Models\production  $production
     * @return \Illuminate\Http\Response
     */
    public function destroy(production $production)
    {
        if($production->delete()) {
            return response()->json([
                'message' => 'Production deleted successfully!!!',
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
