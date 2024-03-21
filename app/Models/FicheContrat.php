<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FicheContrat extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'ref',        
        'date_debut',
        'date_fin',
        'montant_global_implantation',
        
    ];
}
