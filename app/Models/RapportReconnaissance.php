<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RapportReconnaissance extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'ref_rapport',        
        'project_id',
        'date_recp_imp',
        'coordonne_x',
        'coordonne_y',
        'coordonne_z',
        'utm_x',
        'utm_y',
        'description',

        
    ];
}
