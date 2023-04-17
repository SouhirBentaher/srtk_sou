<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarif extends Model
{
    use HasFactory;
    protected $fillable = [
        'prix',
        'prix_fixe',
    ];
    public function DemandeAbonnement()
    {
        return $this->belongsTo(DemandeAbonnement::class);
    }
}
