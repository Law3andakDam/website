<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\DonerRequest;

use App\BloodType;
use App\Doner;

use Datatables;
use DB;

class DonersController extends Controller
{
     
    /*
    // function of doners index  
    public function index(){
        
        return view('user.doner.index');
    }
    */
    
    // function which render new doner form
     public function create(){
          $types = BloodType::pluck('type', 'id');

          return view('user.doner',compact('types')); 
    }
    
    // function of adding new doner 
    public function store(DonerRequest $request, Doner $doner){

        $doner->create([
            'doner_mobile'=>$request->doner_mobile,
            'doner_email'=>$request->doner_email,
            'blood_type_id'=>$request->blood_type
        ]);
        
            return redirect('/admin/home')->withFlashMessage('Yor Information Added Successfully');
    }



   // initialize dataTable of roles function
   public function anyData(Doner $doner){

      $doners = $doner->all();
    
      return Datatables::of($doners )
   

           ->editColumn('blood_type_id', function ($model){
                $role_name = DB::table('blood_type')->where('id', '=' ,$model->blood_type_id)->value('type'); 
                return $role_name;
             })

           ->editColumn('control', function ($model){
                 $all = '<a href="/admin/doners/'.$model->id.'/edit" 
                 class="btn btn-xs btn-default"    title="Edit">
                  <i class="fa fa-pencil fa-2x"></i></a>';


              $all .= '<a href="/admin/doners/'.$model->id.'/delete" class="btn btn-xs btn-danger" title="Delete"> <i class="fa fa-times fa-2x"></i></a>';
                            
             
          return $all;
     })
          ->make(true);
  }
}
