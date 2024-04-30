<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lieu extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'adresse',
        'localisation',
        'ville',
        'pays',
        'description',
        'type',
        'website',
        'phone',
        'email',
        'opening_hours',
        'latitude',
        'longitude',
    ];
    public function concerts()
    {
        return $this->hasMany(Concert::class);
    }
}
