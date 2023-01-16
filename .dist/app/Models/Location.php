<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'location';
    use HasFactory;
    public function district(){ 
        
        return $this->hasMany('App\Models\District','id','parent_id')->select(['name as district','id']);
    

    }
}
