<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'sigle',        
        'name',
        'rapport_id',
        'zone_id',
        'bloc_id',
        'commune_id',
        'status',
        'date_c',
        'type',
        
    ];
}
