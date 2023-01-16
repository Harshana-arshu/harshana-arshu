<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ModelM extends Model
{     protected $table = 'Model';
    use HasFactory;
    public function caty(){ 
        
        return $this->hasMany('App\Models\Category','id','parent_id')->select(['name as caty','id']);
    

    }
}
