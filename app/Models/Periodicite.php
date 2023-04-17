<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Periodicite extends Model
{
    use HasFactory;
    protected $fillable = [
        'labelle',

    ];
    public function TypeAbonnemennt()
    {
        return $this->belongsToMany(TypeAbonnemennt::class);
    }
}
