<?php

namespace App\Http\Controllers;

use App\Models\releve;
use Illuminate\Http\Request;

class ReleveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $releves = Releve::orderBy('created_at', 'DESC')->paginate(1000);
        return response()->json($releves, 200);
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
            'nom_agence' => 'required|string|max:255',
            'code_agence' => 'required|string|max:255',
            'nom_releveur' => 'required|string|max:255',
            'numero_compteur' => 'required|string|max:255',
            'nom_prenom' => 'required|string|max:255',
            'reference_abonne' => 'required|string|max:255',
            'ancien_index' => 'required|string|max:255',
            'nouvel_index' => 'required|string|max:255',
            'anomalie' => 'required|string|max:255',
            'photo' => 'required|string|max:255',
        ]);
        $releve = new Releve();
        $releve->nom_agence = $request->nom_agence;
        $releve->code_agence = $request->code_agence;
        $releve->nom_releveur = $request->nom_releveur;
        $releve->numero_compteur = $request->numero_compteur;
        $releve->nom_prenom = $request->nom_prenom;
        $releve->reference_abonne = $request->reference_abonne;
        $releve->ancien_index = $request->ancien_index;
        $releve->nouvel_index = $request->nouvel_index;
        $releve->anomalie = $request->anomalie;
        $releve->photo = $request->photo;
        if($releve->save()) {
            return response()->json($releve, 200);
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
     * @param  \App\Models\releve  $releve
     * @return \Illuminate\Http\Response
     */
    public function show(releve $releve)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Request  $request
     * @param  \App\Models\releve  $releve
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, releve $releve)
    {
        $request->validate([
            'nom_agence' => 'required|string|max:255',
            'code_agence' => 'required|string|max:255',
            'nom_releveur' => 'required|string|max:255',
            'numero_compteur' => 'required|string|max:255',
            'nom_prenom' => 'required|string|max:255',
            'reference_abonne' => 'required|string|max:255',
            'ancien_index' => 'required|string|max:255',
            'nouvel_index' => 'required|string|max:255',
            'anomalie' => 'required|string|max:255',
            'photo' => 'required|string|max:255',
        ]);
        $releve->nom_agence = $request->nom_agence;
        $releve->code_agence = $request->code_agence;
        $releve->nom_releveur = $request->nom_releveur;
        $releve->numero_compteur = $request->numero_compteur;
        $releve->nom_prenom = $request->nom_prenom;
        $releve->reference_abonne = $request->reference_abonne;
        $releve->ancien_index = $request->ancien_index;
        $releve->nouvel_index = $request->nouvel_index;
        $releve->anomalie = $request->anomalie;
        $releve->photo = $request->photo;
        if($releve->save()) {
            return response()->json($releve, 200);
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
     * @param  \App\Models\releve  $releve
     * @return \Illuminate\Http\Response
     */
    public function destroy(releve $releve)
    {
        if($releve->delete()) {
            return response()->json([
                'message' => 'Releve deleted successfully!!!',
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
