<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

use App\Models\User;
use DB;

class UserController extends Controller
{
    public function index()
    {
    try
    {
        return view('front-ent.user');
    }
    catch(\Exception $e){
        return $e->getMessage();
    }
}
public function store(Request $request)
{
    // return $request->all();
    $this->validate($request, [
        'first-name'   => 'required',
        'last-name'    => 'required',
        'phone_number' => 'required|numeric',
        'address'      => 'required',
        'password'     => 'required'
    ]);
    try{
    DB::transaction(function () use ($request)  {
        $user=new User;
        $user->first_name=$request->input('first-name');
        $user->last_name=$request->input('last-name');
        $user->phone_number=$request->input('phone_number');
        $user->address=$request->input('address');
        // $user->password= Hash::make($request->Password);
         $user->password=Crypt::encryptString($request->password);

        $user->save();
    });
    return redirect('login');
    
}
catch (\Exception $e) {
    return $e->getMessage();
}




}
}
