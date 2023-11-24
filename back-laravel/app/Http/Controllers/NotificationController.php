<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NotificationController extends Controller
{
    public function index()
    {
        $notifications = Notification::all();

        return response()->json($notifications);
    }

    public function show($id)
    {
        $notification = Notification::findOrFail($id);

        return response()->json($notification);
    }

    public function store(Request $request)
    {
        $request->validate([
            'dateOpened' => 'required|date',
            'message' => 'required',
        ]);

        $notification = Notification::create($request->all());

        return response()->json($notification, Response::HTTP_CREATED);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'dateOpened' => 'required|date',
            'message' => 'required',
        ]);

        $notification = Notification::findOrFail($id);
        $notification->update($request->all());

        return response()->json($notification, Response::HTTP_OK);
    }

    public function destroy($id)
    {
        $notification = Notification::find($id);
        if(!$notification) {
            return response()->json('Notification not found');
        }
        $notification->delete();

        return response()->json('Notification deleted successfully');
    }

    public function deleteNotificationsByUserId($userId)
    {
        Notification::where('user_id', $userId)->delete();

        return response()->json('Notifications deleted successfully');
    }

    public function getNotificationCountByUserId($userId)
    {
        $count = Notification::where('user_id', $userId)->count();
        return response()->json(['count' => $count]);
    }


}
