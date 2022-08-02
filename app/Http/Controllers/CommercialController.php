<?php

namespace App\Http\Controllers;

use App\Models\commercial;
use Illuminate\Http\Request;

class CommercialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commercials = Commercial::orderBy('created_at', 'DESC')->paginate(1000);
        return response()->json($commercials, 200);
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
            'devis_branchement' => 'required|string|max:255',
            'abonnement' => 'required|string|max:255',
            'fiche_poste' => 'required|string|max:255',
            'depose_compteur' => 'required|string|max:255',
            'rapport_activite' => 'required|string|max:255',
        ]);
        $commercial = new Commercial();
        $commercial->devis_branchement = $request->devis_branchement;
        $commercial->abonnement = $request->abonnement;
        $commercial->fiche_poste = $request->fiche_poste;
        $commercial->depose_compteur = $request->depose_compteur;
        $commercial->rapport_activite = $request->rapport_activite;
        if($commercial->save()) {
            return response()->json($commercial, 200);
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
     * @param  \App\Models\commercial  $commercial
     * @return \Illuminate\Http\Response
     */
    public function show(commercial $commercial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Request  $request
     * @param  \App\Models\commercial  $commercial
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecommercialRequest $request, commercial $commercial)
    {
        $request->validate([
            'devis_branchement' => 'required|string|max:255',
            'abonnement' => 'required|string|max:255',
            'fiche_poste' => 'required|string|max:255',
            'depose_compteur' => 'required|string|max:255',
            'rapport_activite' => 'required|string|max:255',
        ]);
        $commercial->devis_branchement = $request->devis_branchement;
        $commercial->abonnement = $request->abonnement;
        $commercial->fiche_poste = $request->fiche_poste;
        $commercial->depose_compteur = $request->depose_compteur;
        $commercial->rapport_activite = $request->rapport_activite;
        if($commercial->save()) {
            return response()->json($commercial, 200);
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
     * @param  \App\Models\commercial  $commercial
     * @return \Illuminate\Http\Response
     */
    public function destroy(commercial $commercial)
    {
        if($commercial->delete()) {
            return response()->json([
                'message' => 'Commercial deleted successfully!!!',
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
