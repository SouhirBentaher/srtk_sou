<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Etablissement extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom', 'code_etab', 'type_etablissement', 'lib_etablissement',

    ];
    public function Abonné()
    {
        return $this->belongsTo(Abonne::class);
    }
    public function TypeEtablissementr()
    {
        return $this->belongsTo(TypeEtablissement::class);
    }
    public function NatureEtablissement()
    {
        return $this->belongsTo(NatureEtablissement::class);
    }
}
