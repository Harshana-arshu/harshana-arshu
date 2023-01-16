<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Location;
use DB;
use Redirect;

class LocationController extends Controller
{
    public function index(Request $request)
    {
      
        try{
            $locate=Location::with('district')
               ->orderBy('id','desc')
               ->paginate(1000);
               
               return view('location.index',array('locate'=>$locate)); 
               
        }
        catch (\Exception $e){
            
            return $e->getMessage();
    }
  }
  public function create()
  {
    try
    {
        $district=District::get();
        
        return view('location.create',array('district'=>$district));  
               
    }
    
    catch (\Exception $e){
        
            
        return $e->getMessage();
}
  }
     public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request, [
            'location'=>'required',
            'district'=>'required|numeric'
        ]);
        
        try{
            DB::transaction(function () use ($request)  {
                
                $locate=new Location;
                $locate->name = $request->input('location');
                $locate->parent_id = $request->input('district');
                $locate->save();
                     
    });

    return Redirect::to('location');
     } catch (\Exception $e) {


return $e->getMessage();
}

        }
        public function delete()
        {
            DB::transaction(function() {
                Location::where('locate_id',$locate->id)->delete();
        });
        }
        
            
            

            
        
    }



