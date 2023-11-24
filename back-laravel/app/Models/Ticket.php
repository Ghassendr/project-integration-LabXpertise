<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\User;
use app\Models\Actif;
use app\Models\Salle;

class Ticket extends Model
{
    use HasFactory;


    protected $fillable = [
        'typeTicket',
        'details',
        'statue',
        'dateOpened',
        // 'dateClosed',
        'lastUpdate',
        'priorite',
        'user_id',
        'actif_id',
        "salle_id"

    ];
    public function ticketuser(){
        return $this->belongsTo(User::class);
        }

        public function ticketactif(){
            return $this->belongsTo(Actif::class);
            }
            public function tickesalle(){
                return $this->belongsTo(Salle::class);
                }

    }
