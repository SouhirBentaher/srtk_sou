<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Station extends Model
{
    use HasFactory;
    protected $fillable = [
        'code_station',
        'depart',
        'destination'

    ];
    public function Ligne()
    {
        return $this->belongsToMany(Ligne::class);
    }
}
