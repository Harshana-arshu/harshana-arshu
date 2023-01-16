<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ToAdd extends Model
{
    protected $table = 'to_add_post_';
    use HasFactory;
    public function caty(){ 
        
        return $this->hasMany('App\Models\Category','id','category_id')->select(['name as category_name','id']);
    

    }
    public function district(){ 
        
        return $this->hasMany('App\Models\District','id','district_id')->select(['name as district_name','id']);
    

    }
    public function user(){ 
        
        return $this->hasMany('App\Models\User','id','user_id')->select(['first_name as customername','id']);
    

    }
    public function model(){ 
        
        return $this->hasMany('App\Models\ModelM','id','model_id')->select(['name as model_name','id']);
    

    }
    public function location(){ 
        
        return $this->hasMany('App\Models\Location','id','location_id')->select(['name as location_name','id']);
    

    }
}
