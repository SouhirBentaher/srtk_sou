<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Impression extends Model
{
    use HasFactory;
    public function Abonnement()
    {
        return $this->belongsTo(Abonnement::class);
    }
    public function Administrateur()
    {
        return $this->hasOne(Administrateur::class);
    }
}
