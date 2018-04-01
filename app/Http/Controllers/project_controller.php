<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\project;
use App\User;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\Controller;


class project_controller extends Controller
{
  public function store_project(Request $request){

    $this->validate($request, [

           'project_name' => 'unique:projects'

       ]);

    $project = new project();

    $project->project_name= $request->input('project_name');
    $project->client_name=$request->input('client_name');
    $project->client_email= $request->input('client_email');
    $project->manager_email= $request->input('manager_id');
    $project->employee_email1= $request->input('employee_id');
    $project->discription= $request->input('discription');


    $project->save();
    return redirect()->back()->with('message','registered successfuly');

  }
  public function read_project(){
    $read=project::all();

      return view('Admin/view_project',['read'=>$read]);


  }
  public function search_project(){
    $read=project::all();


  return view('Admin/update_project',['read'=>$read]);

  }
   public function client_read_project(){
      $read=DB::table('projects')->select('*')->orderBy('Pid', 'desc')->get();

        return view('Client/client_home',['read'=>$read]);

}
public function client_project_feedback(){
    $read=DB::table('projects')->select('*')->orderBy('Pid', 'desc')->get();

     return view('Client/client_feedback',['read'=>$read]);

}
    public function view_update_project($Pid){

        $read=project::all()->where('Pid',$Pid);

    return view('Admin/update_project',['read'=>$read]);

    }


public function update_project(Request $request){

  DB::table('projects')
  ->where('Pid',$request->input('Pid'))
  ->update(['project_name'=> $request->input('project_name'),
            'client_name'=> $request->input('client_name'),
            'client_email'=> $request->input('client_email'),
            'manager_email'=> $request->input('manager_email'),
            'employee_email1'=> $request->input('employee_email1'),
            'discription'=> $request->input('discription')]);

    return redirect('view_project');

}

public function manager_employee(Request $request){

DB::table('projects')
->where('project_name',$request->input('project_name'))
->update(['employee_email1'=> $request->input('employee_email1'),
          'employee_email2'=> $request->input('employee_email2'),
          'employee_email3'=> $request->input('employee_email3'),
          'employee_email4'=> $request->input('employee_email4'),
          'employee_email5'=> $request->input('employee_email5')]);

  return redirect()->back();

}


public function delete_project($Pid){
   DB::table('projects')->where('Pid',$Pid)->delete();

      return redirect()->back();

}

public function view_project($Pid){
   $read=project::all()->where('Pid',$Pid);
   return view('Admin/admin_project_view',['read'=>$read]);

}
public function view_one_project($Pid){
   $read=project::all()->where('Pid',$Pid);
   return view('Admin/view_one_project',['read'=>$read]);

}

public function manager_project_view(){
   $read=project::all();

     return view('Manager/manager_project',['read'=>$read]);

}
public function client_project(){
   $read=project::all();

     return view('Client/client_project',['read'=>$read]);

}

public function client_view_project($Pid){
   $read=project::all()->where('Pid',$Pid);
   return view('Client/client_view_project',['read'=>$read]);

}
public function employee_project(){
   $read=project::all();

     return view('Employee/employee_project',['read'=>$read]);
}
}
