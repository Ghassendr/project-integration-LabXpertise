<?php
namespace App\Http\Controllers;

use App\Models\Logiciel;
use Illuminate\Http\Request;
class LogicielController extends Controller
{
    public function index()
    {
        $logiciels = Logiciel::all();
        return response()->json($logiciels);
    }
    public function store(Request $request)
    {
        $logiciels = new Logiciel([
            'modele' => $request->input('modele'),
            'type' => $request->input('type'),
            'referance' => $request->input('referance'),
        ]);
        $logiciels->save();
        return response()->json('Logiciel created!');
    }
    public function show($id)
    {
        $contact = Logiciel::find($id);
        return response()->json($contact);
    }
    public function update(Request $request, $id)
    {
       $logiciels = Logiciel::find($id);
       $logiciels->update($request->all());
       return response()->json('Logiciel updated');
    }
    public function destroy($id)
    {
        $logiciels = Logiciel::find($id);
        $logiciels->delete();
        return response()->json('Logiciel deleted successfully!');
    }
}
