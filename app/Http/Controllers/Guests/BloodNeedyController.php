<?php

namespace App\Http\Controllers\Guests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\CaseRequest;
use App\BloodNeedy;
use App\BloodType;
use Datatables;
use DB;

class BloodNeedyController extends Controller
{
    

      // function of doners index  
    public function index(){
        
        return view('user.case.index');
    }


    // function which render new doner form
     public function create(){
          $types = BloodType::pluck('type', 'id');

          return view('user.blood_needy',compact('types')); 
    }
    
    // function of adding new doner 
    public function store(CaseRequest $request, BloodNeedy $blood_needy){
        
        $blood_needy->create([
        	'name'=>$request->case_name,
            'mobile'=>$request->case_mobile,
            'email'=>$request->case_email,
            'hospital_name'=>$request->case_hospital,
            'blood_type_id'=>$request->case_blood_type
        ]);
        
            return redirect('/Home')->withFlashMessage('Your Request Sent Successfully');
    }


   // initialize dataTable of roles function
   public function anyData(BloodNeedy $case){

      $cases = $case->all();
    
      return Datatables::of($cases)
   

           ->editColumn('blood_type_id', function ($model){
                $blood_type_name = DB::table('blood_type')->where('id', '=' ,$model->blood_type_id)->value('type'); 
                return $blood_type_name;
             })

     
          ->make(true);
  }
}
