<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeEtablissement extends Model
{
    use HasFactory;
    protected $table = 'type_etablissements';
    protected $fillable = [
        'labelle',
    ];
    public function etablissement()
    {
        return $this->hasMany(Etablissement::class);
    }
}
