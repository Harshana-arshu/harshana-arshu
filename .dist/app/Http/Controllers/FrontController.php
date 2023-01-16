<?php

namespace App\Http\Controllers;
use App\Models\ToAdd;
use App\Models\Category;
use App\Models\Location;
use App\Models\User;
use App\Models\ModelM;
use App\Models\Image;


use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        try{
          $loc=Location::get();
            return view('front-ent.index',['loc'=>$loc]);
        }
        catch (\Exception $e){
            
            return $e->getMessage();
    }
    }
    public function get_add()
    {
      try{
        
        $addon=ToAdd::with('caty')->get();
        $loc=Location::get();
        

        return view('front-ent.index',['addon'=>$addon,'loc'=>$loc]);
      }
      catch (\Exception $e){
            
        return $e->getMessage();
}
    }
    public function inner_page($id)
    {
      try{
        $customer=ToAdd::with('user','district','caty','model','location')->where('id',$id)->first();
        $more_add=ToAdd::with('location')->where('model_id',$customer->model_id)->limit(3)->get();
        $loc=Location::get();
        $cat=Category::get();

        $image=Image::where('post_id',$id)->get();
      
       
        return view('front-ent.single-product',['cust'=>$customer,'more_add'=>$more_add,'image'=>$image,'loc'=>$loc,'cat'=>$cat]);
       
      }
      catch (\Exception $e){
            
        return $e->getMessage();
}
    }
    public function search_index(Request $request)
    {
  try{
    $searchi=ToAdd::Where('ad_title', 'like', '%' . $request->input('key-word') . '%')->get();
    $stha=Location::get();
    $cat=Category::get();
    
                
             
    
    return view('front-ent.search_index',['searchi'=>$searchi,'stha'=>$stha,'cat'=>$cat]);
  }
  catch (\Exception $e){
            
    return $e->getMessage();
}
    }
    public function iphone()
    {
      try{
        $stha=Location::get();
        $cat=Category::get();
        $searchi=ToAdd::where('category_id',1)->get();
        return view('front-ent.search_index',['searchi'=>$searchi,'stha'=>$stha,'cat'=>$cat]);
      }
      catch (\Exception $e){
            
        return $e->getMessage();
    }
    }
    public function mac()
    {
      try{
        $stha=Location::get();
        $cat=Category::get();
        $searchi=ToAdd::where('category_id',2)->get();
        return view('front-ent.search_index',['searchi'=>$searchi,'stha'=>$stha,'cat'=>$cat]);
        
      }
      catch (\Exception $e){
            
        return $e->getMessage();
    }
    }
    public function watches()
    {
      try{
        $stha=Location::get();
        $cat=Category::get();
        $searchi=ToAdd::where('category_id',3)->get();
        return view('front-ent.search_index',['searchi'=>$searchi,'stha'=>$stha,'cat'=>$cat]);
      }
      catch (\Exception $e){
            
        return $e->getMessage();
    }
    }
    public function airpod()
    {
      try{
        $cat=Category::get();
        $stha=Location::get();
        $searchi=ToAdd::where('category_id',4)->get();
        return view('front-ent.search_index',['searchi'=>$searchi,'stha'=>$stha,'cat'=>$cat]);
      }
      catch (\Exception $e){
            
        return $e->getMessage();
    }
    }
    public function tv()
    {
      try{
        $stha=Location::get();
        $cat=Category::get();
        $searchi=ToAdd::where('category_id',5)->get();
        return view('front-ent.search_index',['searchi'=>$searchi,'stha'=>$stha,'cat'=>$cat]);
      }
      catch (\Exception $e){
            
        return $e->getMessage();
    }
    }
    public function accessories()
    {
      try{
        $stha=Location::get();
        $cat=Category::get();
        $searchi=ToAdd::where('category_id',6)->get();
        return view('front-ent.search_index',['searchi'=>$searchi,'stha'=>$stha,'cat'=>$cat]);
      }
      catch (\Exception $e){
            
        return $e->getMessage();
    }
    }
}
