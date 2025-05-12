<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;

    // Liste des champs qu'on autorise à remplir automatiquement
    protected $fillable = [
        'adresse',
        'nom',
		'email',
        'prenom',
        'password',
    ];
}
