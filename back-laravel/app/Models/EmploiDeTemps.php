<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Salle;
class EmploiDeTemps extends Model
{
    use HasFactory;

    protected $fillable = [
        "jour",
        "prof1" ,
        "prof2" ,
        "prof3" ,
        "prof4" ,
        "prof5" ,
        "prof6" ,
        "salle_id"
    ];


    public function emploisalle(){
        return $this->belongsTo(Salle::class);
        }
}
