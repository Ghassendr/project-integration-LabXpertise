<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Notification;
<<<<<<< HEAD
=======
use App\Models\Ticket;

>>>>>>> cbc6667cb005d5a735eb8035741743662d1f1644
class UserController extends Controller
{

    public function getNotifications($userId)
    {
        $user = User::find($userId);

        if (!$user) {
            return response()->json('User not found', 404);
        }

        $notifications = Notification::where('user_id', $userId)->get();

        return response()->json($notifications);
    }
    
    public function getTickets($userId)
    {
        $user = User::find($userId);

        if (!$user) {
            return response()->json('User not found', 404);
        }

        $tickets = Ticket::where('user_id', $userId)->get();

        return response()->json($tickets);
    }

    public function getProfUsers() {
        $users = User::whereHas('userrole', function ($query) {
            $query->where('user-role', 'Prof');
        })->get();

        return response()->json($users);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'role' => 'required|string|max:255',
            'profilePicture'=>'required|string',
                       'isActive'=>'required|string',
                       'grade'=>'required|string',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'role' => $validatedData['role'],
            'profilePicture' => $validatedData['profilePicture'],
            'isActive' => $validatedData['isActive'],
            'grade' => $validatedData['grade'],
            'password' => bcrypt($validatedData['password']),
        ]);

        return response()->json(['message' => 'User created successfully', 'user' => $user], 201);
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
