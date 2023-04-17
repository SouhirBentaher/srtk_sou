<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abonnement extends Model
{
    use HasFactory;
    protected $fillable = [
        'circuit_id', 'ligne_id', 'type_abonnement_id',
        'code_bare',
        'date_debut',
        'date_fin'
    ];
    public function Impression()
    {
        return $this->hasOne(Impression::class);
    }
    public function Circuit()
    {
        return $this->belongsTo(circuits::class);
    }
    public function TypeAbonnement()
    {
        return $this->belongsTo(TypeAbonnemennt::class);
    }
    public function Ligne()
    {
        return $this->belongsTo(Ligne::class);
    }
    public function Abonne()
    {
        return $this->belongsTo(Abonne::class);
    }
}
