<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class concert extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo',
        'nom',
        'description',
        'date_debut',
        'date_fin',
        'lieu_id',
        // 'prix',
        'type',
        'capacite',
        'organisateur',
        'url',
        'date_annonce',
        'date_vente',
        'date_fin_vente',
    ];
    public function lieu()
    {
        return $this->belongsTo(Lieu::class);
    }

    public function artistes()
    {
        return $this->belongsToMany(Artiste::class);
    }
    public function billets()
    {
    return $this->hasMany(Billet::class);
    }
    public function category()
{
    return $this->belongsToMany(category::class , 'category_concert', 'concert_id', 'categorie_id');
}

}
