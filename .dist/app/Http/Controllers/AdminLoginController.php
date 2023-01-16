<?php

namespace App\Http\Controllers;
use App\Models\AdminLogin;

use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function index()
    {
    try{
        return view('admin.login');
      }
      catch(\Exception $e){
        return $e->getMessage();
    }
      }
      public function login(Request $request)
      {
      
      $this->validate($request, [
        'username'=>'required',
        'password'=>'required'
      ]);
        try{
        
        
            $username=$request->input('username');
            $pass=$request->input('password');
    
            $login=AdminLogin::where('username',$username)->first();
           
          
            if($login)
            { 
              
                 
                if($password==$pass)
                {       
                    $request->session()->put('user_id',$login->id);
                    $request->session()->put('username',$username);
                return redirect('AdminLogin');
                }
                else{
                    $request->session()->flash('error_login','Invalid Password');
                    return back();
                }
            }
            else{
              
                $request->session()->flash('error_login','Invalid username/ Password');
                return back();
            }
    
            
              
             
        }catch(\Exception $e){
                return $e->getMessage();
            }
        }
}
