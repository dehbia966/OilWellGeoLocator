<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bloc extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',        
        'code',
        'bassin_id',
    ];
}
