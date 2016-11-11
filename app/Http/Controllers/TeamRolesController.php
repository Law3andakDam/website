<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\RoleRequest;

use App\TeamRole;
use Datatables;


class TeamRolesController extends Controller
{
    
    // function of roles index  
    public function index(){
        
        return view('admin.role.index');
    }
    
    // function which render new role form
     public function create(){
         
          return view('admin.role.add'); 
    }
    
    // function of adding new role 
    public function store(RoleRequest $request, TeamRole $teamrole){
        $teamrole->create([
            'role'=>$request->role,
        ]);
        
            return redirect('/admin/roles')->withFlashMessage('Role Added Successfully');
    }
    
    public function edit(TeamRole $teamrole, $id){
        $teamrole = $teamrole->find($id);
        return view('admin.role.edit',compact('teamrole'));
        
    }
    
    
    public function update( TeamRole $teamrole, RoleRequest $request){
       $updated = $teamrole->find($request->id);
        
       $updated->fill($request->all())->save();
          return redirect('/admin/roles');
    }
    
    
     // delete roles function
    public function delete(TeamRole $teamrole, $id){
  
        if($id != 1){
            
            $teamrole->find($id)->delete();
            
            return redirect('/admin/roles')->withFlashMessage('Role Deleted Successfully');
        }
         return redirect('/admin/roles');
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
