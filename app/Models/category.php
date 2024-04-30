<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable = ['nom',
    'color',
    'description',
    'ordre',
    'slug',
];
public function concerts()
{
    return $this->belongsToMany(Concert::class, 'category_concert', 'categorie_id', 'concert_id');
}
}
