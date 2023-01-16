<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelM;
use App\Models\Category;
use DB;


class ModelController extends Controller
{
    public function index()
    {
        try{
         $model=ModelM::with('caty')
         ->orderBy('id','desc')
         ->get();
        
         return view('category.index',array('model'=>$model));
        }
        catch(\Exception $e){
            return $e->getMessage();
    }
}
public function create()
{
    try{
        $caty=Category::get();
        return view('category.create',array('caty'=>$caty));

    }
    catch(\Exception $e){
        return $e->getMessage();
}
}

public function store(Request $request)
{
    // return $request->all();
    $this->validate($request, [
        'category'=>'required|numeric',
        'model'=>'required'
    ]);
    
    try{
        DB::transaction(function () use ($request)  {
            
            $model=new ModelM;
            $model->name = $request->input('model');
            $model->parent_id = $request->input('category');
            $model->save();
                 
});
    

return redirect('model');
    }

catch(\Exception $e){
    return $e->getMessage();
}
    }
}

