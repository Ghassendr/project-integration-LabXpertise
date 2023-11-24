<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Salle;
class Logiciel extends Model
{
    protected $fillable = [
        "nom",
        "photo"
    ];
    use HasFactory;
    public function salles()
    {
        return $this->belongsToMany(Salle::class);
    }
}
