<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeAbonnemennt extends Model
{
    use HasFactory;
    public function Abonnement()
    {
        return $this->hasMany(Abonnement::class);
    }
    public function Validite()
    {
        return $this->hasOne(Validite::class);
    }
    public function Periodicite()
    {
        return $this->belongsToMany(Periodicite::class);
    }
}
