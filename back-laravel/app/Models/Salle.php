<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ticket;
use App\Models\Actif;
use App\Models\EmploiDeTemps;
use App\Models\Logiciel;
class Salle extends Model
{
    use HasFactory;
    public function salleticket(){
        return $this->hasMany(Ticket::class);
        }
        public function salleactif(){
            return $this->hasMany(Actif::class);
            }
            public function salleemploi(){
                return $this->hasMany(EmploiDeTemps::class);
                }
                public function logiciels()
                {
                    return $this->belongsToMany(Logiciel::class);
                }
}
