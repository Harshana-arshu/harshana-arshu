<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;
use App\Models\ModelM;
use App\Models\Location;
use App\Models\Category;
use App\Models\Image;
use App\Helper\File;
use App\Models\ToAdd;
use DB;

class ToaddController extends Controller
{
    use File;
    public function get_post()
    {
        try{
    $id=session('user_id');
        if($id==0)
        {
            return redirect('login');
        }
    
        $dist=District::get();
        $caty=Category::get();
        return view('front-ent.post-ad',['caty'=>$caty,'dist'=>$dist]);
    }
        catch (\Exception $e){
            
            return $e->getMessage();
    }
    }
    public function get_location(Request $request)
    {
      
        $district=$request->district;
        try {
            $location = Location::where("parent_id",'=',$district)
            ->pluck('name','id');
            return response()->json($location);
    } catch (\Exception $e) {
        return $e->getMessage();
    }
    }
    
    public function get_model(Request $request)
    {
      
        $category=$request->category;
        try {
            $model = ModelM::where("parent_id",'=',$category)
            ->pluck('name','id');
            return response()->json($model);
    } catch (\Exception $e) {
        return $e->getMessage();
    }
    }
    public function store(Request $request)
    {
        //  return $request->all();
        $this->validate($request, [
            'ad_title' => 'required',
            'category_id' => 'required',
            'model_id'=>'required',
            'phone_number' => 'required|numeric',
            'price' => 'required|numeric|min:0',
            'description' => 'required',
            'image1' => 'required|mimes:png,jpeg,jpg,',
            'warranty' => 'required',
            'condition' => 'required',
            'color' => 'required',
            'location_id' => 'required|numeric',
            'district_id' => 'required|numeric',
            'storage_capacity'=>'required',
            'BH'=> 'required',
            'address' => 'required',
            'pin'=>'required|numeric'
         ]);
           try {
                if( $file = $request->file('image1') ) {
                       
                      $path = 'uploads';
                      $url1 = $this->file($file,$path,2000,2000);
                  }else{$url='defalut.jpg';}


              
                DB::transaction(function () use ($request,$url1)  {
                    $toadd=new ToAdd;
                    $toadd->ad_title = $request->input('ad_title');
                    $toadd->user_id=session('user_id');
                    $toadd->category_id = $request->input('category_id');
                    $toadd->model_id = $request->input('model_id');
                    $toadd->category_id = $request->input('category_id');
                    $toadd->phone_number=$request->input('phone_number');
                    $toadd->price=$request->input('price');
                    $toadd->description=$request->input('description');
                    $toadd->image=$url1;
                    $toadd->warranty=$request->input('warranty');
                    $toadd->condition=$request->input('condition');
                    $toadd->color=$request->input('color');
                    $toadd->location_id=$request->input('location_id');
                    $toadd->district_id=$request->input('district_id');
                    $toadd->storage_capacity=$request->input('storage_capacity');
                    $toadd->BH=$request->input('BH');
                    $toadd->address=$request->input('address');
                    $toadd->pin=$request->input('pin');
                    $toadd->age=$request->input('age');
                    $toadd->save();
                    
                    if( $file = $request->file('image') ) {
                       
                    
                        $image=New Image;
                        $image->img_name=$url1;
                        $image->post_id=$toadd->id;
                        $image->save();
    
                    }else{$url='defalut.jpg';}
    
                    if( $file = $request->file('image2') ) {
                           
                        $path = 'uploads';
                        $url2 = $this->file($file,$path,2000,2000);
                        $image=New Image;
                        $image->img_name=$url2;
                        $image->post_id=$toadd->id;
                        $image->save();
                    }else{$url='defalut.jpg';}
    
                    if( $file = $request->file('image3') ) {
                           
                        $path = 'uploads';
                        $url3 = $this->file($file,$path,2000,2000);
                        $image=New Image;
                        $image->img_name=$url3;
                        $image->post_id=$toadd->id;
                        $image->save();
                    }else{$url='defalut.jpg';}
                  
                });
                return redirect('post-add');
            }
                catch (\Exception $e) {
                    return $e->getMessage();
                }
    




         }
         public function delete()
         {
             DB::transaction(function() {
                 ToAdd::where('add_id',$toadd->id)->delete();
         });
       }
    }
         

    

