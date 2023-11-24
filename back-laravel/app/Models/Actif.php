<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ticket;
use App\Models\Salle;
class Actif extends Model
{
    protected $fillable = [
        "etat",
        "modele" ,
        "type" ,
        "referance" ,
        "salle_id" 
    ];


    // protected $fillable = ['modele', 'type', 'referance'];
    use HasFactory;
    public function actifticket(){
        return $this->hasMany(Ticket::class);
        }
        public function actifsalle(){
            return $this->belongsTo(Salle::class);
            }


}
