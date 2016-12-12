<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\TeamRequest;
use App\Http\Requests;

use App\TeamMember;
use App\TeamRole;
use App\User;

use Datatables;
use DB;


class TeamMembersController extends Controller
{
    public function __construct(){

    $this->middleware('auth');
    }

 
    // Index - Team Members DataTable
    public function index(){
       
        return view('admin.team.index');
    }
    
    // Create New Team Member
    public function create(){
      
       $roles = TeamRole::pluck('role', 'id');
       return view('admin.team.add',compact('roles'));

     }
    
    // Store Created Team Member
    public function store(TeamRequest $request, TeamMember $teammember){

      
      // as personal image is optional
      if($request->file('member_image')){
           
            $fileName = $request->file('member_image')->getClientOriginalName();   
            $request->file('member_image')->move(
            base_path().'/public/team_images' , $fileName
            );
          
          $image = $fileName;
          
       }

      else{
          $image ='';
       }
        
        $teammember->create([

            'member_name'=>$request->member_name,
            'member_mobile'=>$request->member_mobile,
            'member_email'=>$request->member_email,
            'member_image'=>$image,
            'role_id'=>$request->member_role,
               
        ]);

        
         return redirect('admin/teams')->withFlashMessage('Team Member Added Successfully');
    }
    
   
    // Edit Team Member 
    public function edit(TeamMember $teammember , $id){

        $roles = TeamRole::pluck('role', 'id');
        $teammember = $teammember->find($id);
        
        return view('admin.team.edit',compact('teammember','roles'));
    }
    
      // Update New Data
    public function update( TeamRequest $request, TeamMember $teammember){
     
        $roles = TeamRole::pluck('role');
        $arr[] = (array)$roles;
        $found = 0;
     
        foreach ($roles as $key => $value) {
            if($value == $request->role_id){$found = 1;}
        
        }

        if($found == 1){ 

          $update = $teammember->find($request->id);
          $update->fill(array_except($request->all(),['member_image','role_id']))->save();

        }else{
           $update = $teammember->find($request->id);
             $update->fill(array_except($request->all(),['member_image']))->save();
        }

           

       if($request->file('member_image')){
           
            $fileName = $request->file('member_image')->getClientOriginalName();   
            $request->file('member_image')->move(
            base_path().'/public/team_images' , $fileName
            );
           
           $update->fill(['member_image'=>$fileName])->save();
         } 
         
       return redirect('admin/teams')->withFlashMessage('Team Member Updated Successfully');
    }
    
    // Delete Team Member
    public function delete($id , TeamMember $teammember){
        $teammember->find($id)->delete();
         return redirect('admin/teams')->withFlashMessage('Team Member Deleted Successfully');
    }
    
    

    // initialize dataTable of roles function
    public function anyData(TeamMember $teammember){

      $teammembers = $teammember->all();
    
      return Datatables::of($teammembers )
        
           ->editColumn('member_name', function ($model){
                return \Html::link('/admin/teams/'. $model->id .'/edit', $model->member_name);  
             })

         

           ->editColumn('role_id', function ($model){
                $role_name = DB::table('t_roles')->where('id', '=' ,$model->role_id)->value('role'); 
                return $role_name;
             })

          ->editColumn('control', function ($model){
               $all = '<a href="/admin/teams/'.$model->id.'/edit" class="btn btn-xs btn-default"  title="Edit">
                  <i class="fa fa-pencil fa-2x"></i>
               </a>';

              if($model->id != 1){
                 $all .= '<a href="/admin/teams/'.$model->id.'/delete" class="btn btn-xs btn-danger" title="Delete">
                 <i class="fa fa-times fa-2x"></i></a>';
             }
          return $all;
     })
          ->make(true);
  }
    
}
