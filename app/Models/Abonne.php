<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonne extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prenom',
        'date_naissance',
        'adresse',
        'num_telephone',
        'classe',
        'photo',
        'email',
        'cin',
        'date_emission',
        'nom_parent',
        'prenom_parent',
        'cin_parent'
    ];
    public function Etablissement()
    {
        return $this->hasOne(Etablissement::class);
    }
    public function TypeAbonne()
    {
        return $this->belongsTo(TypeAbonne::class);
    }
    public function Abonnement()
    {
        return $this->hasMany(Abonnement::class);
    }
}
