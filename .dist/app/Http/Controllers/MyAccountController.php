<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\MyAccount;
use App\Models\ToAdd;
use App\Models\Location;
use App\Models\ModelM;
use App\Models\District;
use App\Models\Category;
use App\Models\Image;
use DB;

use Illuminate\Http\Request;

class MyAccountController extends Controller
{
public function index()
{
    try{
        return view('front-ent.my-account');
    }
    catch (\Exception $e){
            
        return $e->getMessage();
}
}
public function Pr()
{
    try{
        $id=session('user_id');
        
        if($id==0)
        {
            return redirect('login');
        }
        $pi=User::where('id',$id)->first();
        $adcart=ToAdd::with('location','district','caty')->where('user_id',$id)->get();
        
        
        return view('front-ent.my-account',['pi'=>$pi,'adcart'=>$adcart]);
    }
    catch (\Exception $e){
            
        return $e->getMessage();
}
}
public function Pi(Request $request)
{
    $this->validate($request, [
        'first_name'=>'required',
        'last_name'=>'required',
        'phone_number'=>'required|numeric',
        'address'=>'required',
        'id'=>'required'
        
        
    ]);
    try{
        DB::transaction(function () use ($request)  {
            
            $prsnl=User::find($request->id);
            $prsnl->first_name = $request->input('first_name');
            $prsnl->last_name = $request->input('last_name');
            $prsnl->phone_number = $request->input('phone_number');
            $prsnl->address = $request->input('address');
            $prsnl->save();
        
                 
});
    return redirect('pr');
    }
    catch (\Exception $e){
            
        return $e->getMessage();
}
}
public function myad($id)
{
    
  try{
    
    
   
    $customer=ToAdd::where('id',$id)->with('user','district','caty','model','location')->first();
    
    $loc=Location::get();
    $cat=Category::get();

    $image=Image::where('post_id',$id)->get();
    
  
   
    return view('front-ent.myaddetail',['cust'=>$customer,'image'=>$image,'loc'=>$loc,'cat'=>$cat]);
   
  }
  catch (\Exception $e)
  {
        
    return $e->getMessage();
}

}

public function edit_page($id)
{
    try{
        

        $cust=ToAdd::find($id);
        

        return view('front-ent.postedit',['cust'=>$cust]);
    }
     catch (\Exception $e)
  {
        
    return $e->getMessage();
}
}
public function store_edit(Request $request)
{  
    $this->validate($request, [
        'phone_number' => 'required|numeric' ,
        'address' => 'required',
        'id'=>'required'
    ]);
    try{
        
        DB::transaction(function () use ($request)  {
        $edit=ToAdd::find($request->id);
        $edit->phone_number=$request->input('phone_number');
        $edit->address=$request->input('address');
        $edit->save();
        });
        return redirect('pr');

    }
    catch (\Exception $e)
    {
          
      return $e->getMessage();
  }
}
public function sold($id)
{
try{
    $status=ToAdd::find($id);
    $status->status=3;
    $status->save();

    return redirect ('pr');
}
catch (\Exception $e)
{
      
  return $e->getMessage();
}
}
public function delete(Request $request,$id)
        {
            try
            {
                $cust=ToAdd::find($id);
                $cust->delete();
                return redirect('pr');
            }
            catch (\Exception $e)
{
      
  return $e->getMessage();
}


}
}

