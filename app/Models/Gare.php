<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gare extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',

    ];
    public function DemandeAbonnement()
    {
        return $this->belongsTo(DemandeAbonnement::class);
    }
}
