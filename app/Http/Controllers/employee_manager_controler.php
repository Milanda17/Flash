<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use App\admin;
use App\employee;
use App\manager;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class employee_manager_controler extends Controller
{

  public function store_data(Request $request){

  $employee = new user();

  $this->validate($request, [

         'email' => 'unique:users'

     ]);

        $employee->first_name= $request->input('first_name');
        $employee->last_name= $request->input('last_name');
        $employee->email= $request->input('email');
        $employee->tele_no= $request->input('tele_no');
        $employee->gender= $request->input('gender');
        $employee->account_type= $request->input('account_type');
        $employee->dob= $request->input('dob');
        $employee->password= bcrypt( $request->input('password'));

        $employee->save();

        if($request->input('account_type')=="admin"){
              $admin = new admin();

              $admin->email=$request->input('email');
              $admin->save();

                return redirect()->back()->with('message','Admin registered successfuly');
        }

    else if($request->input('account_type')=="manager"){
              $manager = new manager();

              $manager->email=$request->input('email');
              $manager->save();

              return redirect()->back()->with('message','Manager registered successfuly');
        }

        else if($request->input('account_type')=="employee"){
                  $employee = new employee();

                  $employee->email=$request->input('email');
                  $employee->save();

                  return redirect()->back()->with('message','Employee registered successfuly');
            }


  }

  public function update_data(Request $request){
      DB::table('users')
      ->where('id',$request->input('id'))
      ->update(['first_name'=> $request->input('first_name'),
                'last_name'=> $request->input('last_name'),
                'email'=> $request->input('email'),
                'tele_no'=> $request->input('tele_no'),
                'gender'=> $request->input('gender'),
                'dob'=> $request->input('dob')]);

   return redirect()->back()->with('message','Updated successfuly');

  }

  public function get_emp_data(){

    $read=user::all();

    return view('Admin/view_employee',['read'=>$read]);
  }

  public function view_one_employee($id){
    $read =user::all()->where('id',$id);
    return view('Admin/view_one_employee',['read'=>$read]);
  }

  public function view_update_employee($id){
    $read =user::all()->where('id',$id);
    return view('Admin/update_employee',['read'=>$read]);
  }

  public function delete_employee($id){


    DB::table('users')->where('id',$id)->delete();
    return redirect()->back();
  }


  public function change_password(Request $request){
  $mila=  DB::table('users')
    ->where('id',$request->input('id') AND 'password',bcrypt( $request->input('current_password')))

    ->update(['password'=>bcrypt( $request->input('password'))]);

   return $mila;

  }



  public function manager_add_employee(){

    $project=DB::table('projects')->where('manager_email',Auth::User()->email)->get();

    $employee = DB::table('users')
          ->join('employees', 'users.email', '=', 'employees.email')
          ->select('users.*','employees.*')
          ->where('account_type',"employee")
          ->orderBy('Eid', 'asc')
          ->get();

    return view('Manager/manager_add_employee',['project'=>$project],['employee'=>$employee]);
  }


}
