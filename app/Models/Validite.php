<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Validite extends Model
{
    use HasFactory;

    public function TypeAbonnement()
    {
        return $this->belongsTo(TypeAbonnement::class);
    }
}
