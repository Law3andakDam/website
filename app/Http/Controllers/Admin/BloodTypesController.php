<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
 

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\BloodRequest;

use App\BloodType;
use Datatables;
use DB;



class BloodTypesController extends Controller
{

  public function __construct(){

    $this->middleware('auth');
   }

  // Index - BloodTypes DataTable
  public function index(){

  	return view('admin.blood.index');
  }

  // Create New Blood Type
  public function create(){

  	return view('admin.blood.add');
  }

  // Store Created Blood Type
  public function store(BloodRequest  $request, BloodType $bloodtype){
    
     // real blood types only
     $types = array("O+", "O-", "A+","A-","B+","B-","AB+","AB-");

     // uppercase new blood type
     $str = strtoupper($request->type);

     // check if it correct type then add it.
     if (in_array($str, $types)) {
         $bloodtype->create([
        'type'=> $str,
          ]);  

         return redirect('/admin/blood_types')->withFlashMessage('Blood Type Added Successfully');
       }

     else{ // if not correct format 
     return redirect('/admin/blood_types/create')->with('type_error', 'Incorrect Blood Type !');
       }
  }

  // Edit Blood Type
  public function edit($id, BloodType $bloodtype){

    $bloodtype = $bloodtype->find($id);
    return view('admin.blood.edit', compact('bloodtype'));

  }

  // update new data 
  public function update(BloodRequest  $request, BloodType $bloodtype){

     $updated = $bloodtype->find($request->id);
      
     // real blood types only 
     $types = array("O+", "O-", "A+","A-","B+","B-","AB+","AB-");

    // uppercase new blood type
     $str = strtoupper($request->type);

    // check if it correct type then add it.
       if (in_array($str, $types)) {
          $updated->fill($request->all())->save();
          return redirect('/admin/blood_types')->with('edit_done', 'Type updated Successfully');
      } 
      else{// if not correct format 
         return redirect('/admin/blood_types')->with('type_error', 'Incorrect Blood Type !');
     }
  }

  // Delete Blood Type
  public function delete($id , BloodType $bloodtype ){

    // get all blood types used in doners table
    $used = DB::table('doners')->where('blood_type_id', $id)->pluck('blood_type_id');

      // count if there is existance => alert this type already used
     if($used->count()){

          return redirect('/admin/blood_types')->with('type_error', 'This Type Is Used !');
     }
     else{  //if there is no existance  => delete it successfully
      $bloodtype->find($id)->delete();
      return redirect('/admin/blood_types')->withFlashMessage('Blood Type Deleted Successfully');
     }
  }



    // initialize dataTable of roles function
     public function anyData(BloodType $bloodtype){
    
        $bloodtypes = $bloodtype->all();
         
        return Datatables::of($bloodtypes)
            
               ->editColumn('type', function ($model){
                  return \Html::link('/admin/blood_types/'. $model->id .'/edit', $model->type);  
               })

              ->editColumn('control', function ($model){
          $all = '<a href="/admin/blood_types/'.$model->id.'/edit" class="btn btn-xs btn-default" title="Edit"> <i class="fa fa-pencil fa-2x"></i></a>';
          if($model->id != 1){
              $all .= '<a href="/admin/blood_types/'.$model->id.'/delete" class="btn btn-xs btn-danger" title="Delete"> <i class="fa fa-times fa-2x"></i></a>';
                            }
          return $all;
    })
            ->make(true);
    }

}
