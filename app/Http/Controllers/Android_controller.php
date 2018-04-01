<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mail;
use App\project;
use App\User;
use App\admin;
use App\employee;
use App\manager;
use App\client;
use DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class Android_controller extends Controller
{


//------------------------------------------------------Register----------------------------------------------------------------------

  public function register_app(Request $request){

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


              return response()->json([
                'success' => 'valid',
                'message' => 'Admin registered successfuly',
              ]);

        }

    else if($request->input('account_type')=="manager"){
              $manager = new manager();

              $manager->email=$request->input('email');
              $manager->save();

              return response()->json([
                'success' => 'valid',
                'message' => 'Manager registered successfuly',
              ]);

        }

        else if($request->input('account_type')=="employee"){
                  $employee = new employee();

                  $employee->email=$request->input('email');
                  $employee->save();

                  return response()->json([
                    'success' => 'valid',
                    'message' => 'Employee registered successfuly',
                  ]);

            }
            else if($request->input('account_type')=="client"){
                      $client = new client();

                      $client->email=$request->input('email');
                      $client->save();

                      return response()->json([
                        'success' => 'valid',
                        'message' => 'client registered successfuly',
                      ]);

                }


  }

//-------------------------------------------------------------------Login----------------------------------------------------------------

     public function login_app(Request $request){

        $data = $request->only('email','password','account_type');

        if(Auth::attempt($data)){

            return response()->json([
              'success' => 'valid',
              'message' => 'Login success',
            ]);

        };

              return response()->json([
                'success' => 'invalid',
                'message' => 'error',
              ]);
      }



//------------------------------------------------------------------------sent mail-----------------------------------------------------------------------

    public function store_mail(Request $request){

      if($request->account_type=="client"){

            $mail = new mail();

            $mail->recever= $request->input('to');
            $mail->sender= $request->input('from');
            $mail->subject= $request->input('subject');
            $mail->description= $request->input('description');
            $mail->project_name=$request->input('project_name');
            $mail->read="0";
            $mail->sent="sent";

            $mail->save();

            return response()->json([
              'success' => 'valid',
              'message' => 'sent massage client',
            ]);

    }

      else if($request->account_type=="admin" || $request->account_type=="manager" || $request->account_type=="employee"){

            $mail = new mail();

            $mail->recever= $request->input('to');
            $mail->sender= $request->input('from');
            $mail->subject= $request->input('subject');
            $mail->description= $request->input('description');
            $mail->project_name=$request->input('project_name');
            $mail->read="message";
            $mail->sent="sent";

            $mail->save();

            return response()->json([
              'success' => 'valid',
              'message' => 'sent massage other',
            ]);
      }

  }



            public function mila(){
              return response()->json([
                'success' => 'valid',
                'message' => 'sent massage',
              ]);

            }

//-------------------------------------------------------------------Read mail-----------------------------------------------------------------------            

            public function read_mail(Request $request){

             $read=DB::table('mails')->where('recever',$request->email)->get();
             $i=1;
             echo '{';
             foreach($read as &$data){
                 echo '"'.(string)$i.'":{"from" :"'.$data->sender.'",';
                 echo '"subject":"'.$data->subject.'",';
                 echo '"description":"'.$data->description.'",';
                 echo '"project_name":"'.$data->project_name.'"}';
                 if(sizeof($read)!=$i){
                     echo ',';
                 }
                $i++; 
             }
             echo '}';
              
              
             

            }


}
