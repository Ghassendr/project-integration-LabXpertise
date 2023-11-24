<?php

namespace App\Http\Controllers;

use App\Models\Actif;
use Illuminate\Http\Request;
use App\Models\EmploiDeTemps;
use App\Models\Salle;

class SalleController extends Controller
{

    function getActifs($salleId)
    {
        $salle = Salle::find($salleId);

        if (!$salle) {
            return response()->json('salle not found', 404);
        }

        $actif = Actif::where('salle_id', $salleId)->get();

        return response()->json($actif);
    }


    function getPcParSalle($salleId)
    {
        $salle = Salle::find($salleId);

        if (!$salle) {
            return response()->json('salle not found', 404);
        }

        $actif = Actif::where('salle_id', $salleId)
        ->where('type','Pc')
        ->get();

        // $pc = $actif::where('type', 'pc')->get();

        return response()->json($actif);
    }




    function getEmploisDeTemps($salleId)
    {
        $salle = Salle::find($salleId);

        if (!$salle) {
            return response()->json('salle not found', 404);
        }

        $emploisDeTemps = EmploiDeTemps::where('salle_id', $salleId)->get();

        return response()->json($emploisDeTemps);
    }

    function updateNombreTable($salleId,$increment){
        $salle = Salle::find($salleId);
        $salle->nombreTable += $increment;
        $salle->save();

        return response()->json($salle);
    }

    function UpdateProjecteur($salleId,$update){
        $salle = Salle::find($salleId);
        $salle->projecteur = $update;
        $salle->save();
        
        return response()->json($salle);
    }

    function nombreTable($salleId){
        $salle = Salle::find($salleId);

        if (!$salle) {
            return response()->json('salle not found', 404);
        }

        $nombreTable = $salle->nombreTable;

        return response()->json($nombreTable);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $salle = Salle::all();
        return response()->json($salle);
        //
    }





    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
