<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BrigadeTopographe extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'ref_brigade',
        'user_id',
        'project_id',
        'material_id',          
        'site_hebergement',
        'date_sorti',
        'date_retour',
        'date_inspection',
        
    ];

    
}
