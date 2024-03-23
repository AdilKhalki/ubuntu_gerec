<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    use HasFactory;
    protected $fillable = [
        'ville_id',
        'code',
        'nom',
        'adresse',
        'telephone',
        'fax',
        'email',
        'directeur',
        'x',
        'y'
    ];

    public function ville() {
        return $this->belongsTo(Ville::class);
    }
    public function agents() {
        return $this->hasMany(Agent::class);
    }
}
