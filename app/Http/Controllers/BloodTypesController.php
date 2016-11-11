<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\BloodType;
use App\Http\Requests;
use App\Http\Requests\BloodRequest;
use Datatables;



class BloodTypesController extends Controller
{
    public function index(){

    	return view('admin.blood.index');
    }

    public function create(){

    	return view('admin.blood.add');
    }

    public function store(BloodRequest  $request, BloodType $bloodtype){
    

     $types = array("O+", "O-", "A+","A-","B+","B-","AB+","AB-");
     $str = strtoupper($request->type);

     if (in_array($str, $types)) {
       $bloodtype->create([
      'type'=> $str,
        ]);  

       return redirect('/admin/blood_types')->withFlashMessage('Blood Type Added Successfully');
       }
       else{
       return redirect('/admin/blood_types/create')->with('type_error', 'Incorrect Blood Type !');
       }
    }


    public function delete($id , BloodType $bloodtype ){
    	$bloodtype->find($id)->delete();
    	return redirect('/admin/blood_types')->withFlashMessage('Blood Type Deleted Successfully');
    }


    public function edit($id, BloodType $bloodtype){
      $bloodtype = $bloodtype->find($id);
      return view('admin.blood.edit', compact('bloodtype'));
    }

    public function update(BloodRequest  $request, BloodType $bloodtype){

         $updated = $bloodtype->find($request->id);

         $types = array("O+", "O-", "A+","A-","B+","B-","AB+","AB-");
         $str = strtoupper($request->type);

         if (in_array($str, $types)) {
            $updated->fill($request->all())->save();
            return redirect('/admin/blood_types')->with('edit_done', 'Type updated Successfully');
        } 
        else{

           return redirect('/admin/blood_types')->with('type_error', 'Incorrect Blood Type !');
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
