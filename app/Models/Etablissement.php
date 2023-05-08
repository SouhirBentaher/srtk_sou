<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    use HasFactory;
    protected $table = 'etablissements';
    protected $fillable = [
        'nom',
        'is_prive'

    ];
    public function Abonne()
    {
        return $this->hasMany(Abonne::class);
    }
    public function TypeEtablissement()
    {
        return $this->belongsTo(TypeEtablissement::class);
    }
}
