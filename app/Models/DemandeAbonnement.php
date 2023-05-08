<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandeAbonnement extends Model
{
    use HasFactory;
    protected $fillable = [
        'section', 'idEtudiant', 'nom', 'prenom',
        'adresse', 'date_naissance',
        'cin', 'date_emission', 'email',
        'numero_tl', 'nom_parent',
        'prenom_parent', 'code_query', 'status',
        'status'
        //'date_reception',
        // 'date_cmd',
    ];
    // public function Tarif()
    // {
    //     return $this->hasOne(Tarif::class);
    // }
    // public function Gare()
    // {
    //     return $this->hasOne(Gare::class);
    // }
    // public function Paiement()
    // {
    //     return $this->hasOne(Paiement::class);
    // }
}
