<?php

namespace App\Http\Controllers;

use App\Models\EmploiDeTemps;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Salle;
class EmploiDeTempsController extends Controller
{

    public function index()
    {
        $emploisDeTemps = EmploiDeTemps::all();

        return response()->json($emploisDeTemps);
    }

    public function show($id)
    {
        $emploiDeTemps = EmploiDeTemps::findOrFail($id);

        return response()->json($emploiDeTemps);
    }

    public function store(Request $request)
    {
        $request->validate([
            'jour' => 'required',
            'prof1' => 'required',
            'prof2' => 'required',
            'prof3' => 'required',
            'prof4' => 'required',
            'prof5' => 'required',
            'prof6' => 'required',
            'salle_id' => 'required',
        ]);

        $emploiDeTemps = EmploiDeTemps::create($request->all());

        return response()->json($emploiDeTemps, Response::HTTP_CREATED);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'jour' => 'required',
            'prof1' => 'required',
            'prof2' => 'required',
            'prof3' => 'required',
            'prof4' => 'required',
            'prof5' => 'required',
            'prof6' => 'required',
            'salle_id' => 'required',
        ]);

        $emploiDeTemps = EmploiDeTemps::findOrFail($id);
        $emploiDeTemps->update($request->all());

        return response()->json($emploiDeTemps, Response::HTTP_OK);
    }

    public function destroy($id)
    {
        $emploiDeTemps = EmploiDeTemps::findOrFail($id);
        $emploiDeTemps->delete();
        return response()->json('Emploi deleted successfully');
    }
}
