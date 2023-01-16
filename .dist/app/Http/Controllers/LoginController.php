<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

use Illuminate\Http\Request;

class LoginController extends Controller
{
  public function index()
  {
  try{
    return view('front-ent.login');
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

        $login=User::where('phone_number',$username)->first();
       
      
        if($login)
        { 
          
            $password = Crypt::decryptString($login->password); 
            if($password==$pass)
            {       
                $request->session()->put('user_id',$login->id);
                $request->session()->put('username',$username);
            return redirect('/');
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



  

