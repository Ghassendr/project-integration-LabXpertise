<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class TicketController extends Controller
{
    public function index()
    {

        $tickets = Ticket::all();

        return response()->json($tickets);
    }

    public function perte(){

        $tickets = Ticket::where('typeTicket', 'Perte')
                    ->where('statue', 'En Attent')
                    ->get();

        return response()->json($tickets);
    }
    
    public function probleme(){

        $tickets = Ticket::whereIn('typeTicket', ['Probleme Mecanique','Probleme Technique'])
                    ->where('statue', 'En Attent')
                    ->get();

        return response()->json($tickets);
    }
    
    public function ticketEnAttent(){

        $tickets = Ticket::where('statue', 'En Attent')
                    ->get();

        return response()->json($tickets);
    }

    public function ticketAccepte(){

        $tickets = Ticket::whereNotIn('statue', ['En Attent','Fermer'])
                    ->get();

        return response()->json($tickets);
    }

    public function show($id)
    {
        $ticket = Ticket::findOrFail($id);

        return response()->json($ticket);
    }

    public function store(Request $request)
    {
        $request->validate([
            'typeTicket' => 'required',
            'details' => 'required',
            'statue' => 'required',
            'priorite' => 'required',
            'dateOpened' => 'required|date',
            'user_id' => 'required',
            'actif_id' => 'required',
            'salle_id' => 'required',
        ]);

        $ticket = Ticket::create($request->all());

        return response()->json($ticket, Response::HTTP_CREATED);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'statue' => 'required'
        ]);

        $ticket = Ticket::findOrFail($id);
        $ticket->update($request->all());

        return response()->json($ticket, Response::HTTP_OK);
    }

    public function destroy($id)
{
    $ticket = Ticket::find($id);

    if (!$ticket) {
        return response()->json('ticket not found', 404);
    }

    $deleted = $ticket->delete();

    if ($deleted) {
        return response()->json(['message' => 'Ticket successfully deleted'], Response::HTTP_OK);
    } else {
        return response()->json(['message' => 'Failed to delete ticket'], Response::HTTP_INTERNAL_SERVER_ERROR);
    }
}

    public function fetchPerte()
    {
        $typeTicket = 'Perte';
       // $status = 'En Attent';
        $status = 'Fermer';

        $tickets = Ticket::where(function ($query) use ($typeTicket, $status) {
            $query->where('typeTicket', $typeTicket)
                  ->where('status', $status);
        })->get();
        return response()->json($tickets,Response::HTTP_OK);
    }

    public function fetchProbleme()
    {
        $typeTicket1 = 'Probleme Technique';
        $typeTicket2 = 'Probleme Mecanique';
     //   $status = 'En Attent';
        $status = 'Ouvert';

        // $tickets = Ticket::whereIn('typeTicket', [$typeTicket1, $typeTicket2])
        //                ->where('status', $status)
        //                 ->get();
                     
        $tickets = Ticket::where(function ($query) use ($typeTicket1, $status) {
            $query->whereIn('typeTicket', $typeTickets)
                  ->where('status', $status);
        })->get();
        return response()->json($tickets,Response::HTTP_OK);
    }
    
}
