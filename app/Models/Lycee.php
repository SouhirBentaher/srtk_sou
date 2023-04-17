<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lycee extends Model
{
    use HasFactory;
    protected $fillable = [
        'lycee', 'etat',
        'type', 'active',
    ];
}
