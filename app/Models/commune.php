<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class commune extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name',
        'wilaya_id',         
        'code',
  
    ];

    public function wilaya(){
    	return $this->hasOne(Wilaya::class,'id','wilaya_id');
    }
}
