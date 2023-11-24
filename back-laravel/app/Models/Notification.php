<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
class Notification extends Model
{


    protected $fillable = [
        'dateOpened',
        'message',
        'user_id'
    ];

    use HasFactory;
    public function notificationuser(){
        return $this->belongsTo(User::class);
        }

}
