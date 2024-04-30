<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class billet extends Model
{
    use HasFactory;
    protected $fillable = [
        'concert_id',
        'user_id',
        'categorie',
        'prix',
        'qr_code',
        'date_achat',
        'date_validation',
        'mode_paiement',
        'numero_transaction',
        'nom_prenom',
        'email',
        'telephone',
    ];
}
