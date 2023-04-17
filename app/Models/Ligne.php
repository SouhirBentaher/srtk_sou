<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ligne extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',

    ];
    public function Categorie()
    {
        return $this->hasOne(Categorie::class);
    }
    public function Abonnement()
    {
        return $this->hasMany(Abonnement::class);
    }
    public function station()
    {
        return $this->belongsToMany(station::class);
    }
}
