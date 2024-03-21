<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AttachementFinal extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'ref_att', 
        'fiche_id',
        'project_id',       
        'date_att',
        'att_signe',
        'description',
        'montant_global',
        
    ];
}
