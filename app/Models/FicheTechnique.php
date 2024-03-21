<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FicheTechnique extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'ref_dos_tech',
        'project_id',        
        'date_recept_ord',
        'date_envoi_odt',
        'date_envoi_ods',
        'date_fin_ods',
        'ref_ods',
        'ref_odt',
        'laltitude',
        'longitude',
        'ref_sis',
        'pos_sis',
        'orgi_si',
        'paramatre_trans',
        'altemetric',
    ];
}
