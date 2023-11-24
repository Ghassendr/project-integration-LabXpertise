<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actif;

class ActifController extends Controller
{
    public function index()
    {
        $actifs = Actif::all();
        return response()->json($actifs);
    }

    public function store(Request $request)
    {

        $actif = new Actif();
        $actif->etat = $request->input('etat');
        $actif->modele = $request->input('modele');
        $actif->type = $request->input('type');
        $actif->referance = $request->input('referance');
        $actif->salle_id = $request->input('salle_id');
        $actif->save();

        return response()->json("actif added", 201);
    }

    public function show($id)
    { $actif = Actif::find($id);
        return response()->json($actif);
    }

    public function update(Request $request, Actif $actif)
    {

        $actif->etat = $request->input('etat');
        $actif->modele = $request->input('modele');
        $actif->type = $request->input('type');
        $actif->referance = $request->input('referance');
        $actif->salle_id = $request->input('salle_id');
        $actif->save();

        return response()->json($actif);
    }

    public function destroy($id)
    {   $actif = Actif::find($id);
        $actif->delete();
        return response()->json('Actif deleted successfully');
    }

}

