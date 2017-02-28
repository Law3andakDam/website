<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\RoleRequest;

use App\TeamRole;
use Datatables;
use DB;


class TeamRolesController extends Controller
{
    public function __construct(){

    $this->middleware('auth');
    }
    
     // Index - Roles DataTable
    public function index(){
        
         return view('admin.role.index');
    }
    
      // Create New Role
    public function create(){
         
          return view('admin.role.add'); 
    }
    
    // Store Created Role
    public function store(RoleRequest $request, TeamRole $teamrole){
        $teamrole->create([
            'role'=>$request->role,
        ]);
        
         return redirect('/admin/roles')->withFlashMessage('Role Added Successfully');
    }
    

    // Edit Blood Type
    public function edit(TeamRole $teamrole, $id){
        $teamrole = $teamrole->find($id);
        return view('admin.role.edit',compact('teamrole'));
        
    }
    
     // Update new data
    public function update( TeamRole $teamrole, RoleRequest $request){
       $updated = $teamrole->find($request->id);
        
       $updated->fill($request->all())->save();
          return redirect('/admin/roles')->with('edit_done', 'Role Updated Successfully');
    }
    
    
    // Delete Blood Type
    public function delete(TeamRole $teamrole, $id){
       // get all roles used in team member table
       $used = DB::table('t_members')->where('role_id', $id)->pluck('role_id');

       // count if there is existance => alert this role already used
       if($used->count()){
            return redirect('/admin/roles')->with('type_error', 'This Role Is Used !');
       }
       else{ //if there is no existance  => delete it successfully

          if($id != 1){
              
              $teamrole->find($id)->delete();
              
              return redirect('/admin/roles')->withFlashMessage('Role Deleted Successfully');
          }
        }
          
    }


      
   // initialize dataTable of roles function
     public function anyData(TeamRole $teamrole){
    
        $teamroles = $teamrole->all();
         
        return Datatables::of($teamroles)
            
               ->editColumn('role', function ($model){
                  return \Html::link('/admin/roles/'. $model->id .'/edit', $model->role);  
               })

              ->editColumn('control', function ($model){
          $all = '<a href="/admin/roles/'.$model->id.'/edit" class="btn btn-xs btn-default"     
                  title="Edit"><i class="fa fa-pencil fa-2x"></i></a>';


          if($model->id != 1){
              $all .= '<a id="delete-btn" href="/admin/roles/'.$model->id.'/delete" class="btn btn-xs btn-danger" title="Delete"> <i class="fa fa-times fa-2x"></i></a>';
                            }
          return $all;
        })
            ->make(true);
    }

         
}
