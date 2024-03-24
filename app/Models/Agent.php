<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;
    protected $guraded = ['id','created_at','updated_at'];    

    public function poste(){
        return $this->belongsTo(Poste::class);
    }
    public function grade(){
        return $this->belongsTo(Grade::class);
    }
    public function etablissement(){
        return $this->belongsTo(Etablissement::class);
    }
    public function reclamations(){
        return $this->hasMany(Reclamation::class);
    }

}
