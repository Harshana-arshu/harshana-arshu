<?php

namespace App\Http\Controllers;
use       App\Models\ToAdd;

use Illuminate\Http\Request;

class AdimController extends Controller
{
    public function index()
    {
        try
        {
            $admin=ToAdd::get();
            return view('admin.admin',['admin'=>$admin]);
        }
        catch (\Exception $e){
            
            return $e->getMessage();
    }
    }
    public function approve($id)
{
try{
    $status=ToAdd::find($id);
    $status->status=1;
    $status->save();

    return redirect ('admin');
}
catch (\Exception $e)
{
      
  return $e->getMessage();
}
}
}
