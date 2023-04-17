<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DemandeAbonnement extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_reception',
        'date_cmd',
        'code_query',
        'status'
    ];
    public function Tarif()
    {
        return $this->hasOne(Tarif::class);
    }
    public function Gare()
    {
        return $this->hasOne(Gare::class);
    }
    public function Paiement()
    {
        return $this->hasOne(Paiement::class);
    }
}
