<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NatureEtablissement extends Model
{
    use HasFactory;
    protected $fillable = [
        'labelle',

    ];
    public function Etablissement()
    {
        return $this->hasMany(Etablissement::class);
    }
}
