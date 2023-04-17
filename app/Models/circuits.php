<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class circuits extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',

    ];
    public function Abonnement()
    {
        return $this->hasMany(Abonnement::class);
    }
}
