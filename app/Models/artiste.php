<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artiste extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo',
        'nom',
        'prenom',
        'blaze',
        'genre_musical',
        'date_de_naissance',
        'biographie',
        'site_web',
        'reseaux_sociaux',
        'pays_origine',
        'ville_origine',
        'annee_debut',
        'annee_fin',
    ];
    public function concerts()
    {
        return $this->belongsToMany(Concert::class, 'artiste_concert');
    }
}
