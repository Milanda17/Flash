<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\mail;
use App\project;
use App\User;
use DB;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Carbon\Carbon;
use Image;
use Response;


class mail_controller extends Controller
{
//-----------------------------------------------------------------------------------------------------------------------------------------------------
    public function store_data(Request $request){



            if(Auth::User()->account_type=="client"){

                  $mail = new mail();

                  $mail->recever= $request->input('to');
                  $mail->sender= Auth::User()->email;
                  $mail->subject= $request->input('subject');
                  $mail->description= $request->input('description');
                  $mail->project_name=$request->input('project_name');
                  $mail->read="0";

                  if($request->hasFile('attachment')){

                    $avatar=$request->file('attachment');
                    $filename=time().'.'.$avatar->getClientOriginalExtension();
                    Image::make($avatar)->save(public_path('/images/'.$filename));

                        $mail->attachment=$filename;
                }



                  if($request->submit_button=="sent"){
                        $mail->sent="sent";
                      }else {
                        $mail->sent="save";
                      }

                  $mail->save();

             if($request->submit_button=="sent"){
                        return redirect()->back()->with('message','Your message has been sent');
                      }else {
                        return redirect()->back()->with('message','Your message has been save');

          }
        }

              else if(Auth::User()->account_type=="admin" || Auth::User()->account_type=="manager" || Auth::User()->account_type=="employee"){

                    $mail = new mail();

                    $mail->recever= $request->input('to');
                    $mail->sender= Auth::User()->email;
                    $mail->subject= $request->input('subject');
                    $mail->description= $request->input('description');
                    $mail->project_name=$request->input('project_name');
                    $mail->read="message";
                    $mail->sent="sent";

                    if($request->submit_button=="sent"){
                          $mail->sent="sent";
                        }else {
                          $mail->sent="save";
                        }


                        if($request->hasFile('attachment')){

                          $avatar=$request->file('attachment');
                          $filename=time().'.'.$avatar->getClientOriginalExtension();
                          Image::make($avatar)->save(public_path('/images/'.$filename));

                              $mail->attachment=$filename;
                      }



                    $mail->save();

                    if($request->submit_button=="sent"){
                          return redirect()->back()->with('message','Your message has been sent');
                        }else {
                          return redirect()->back()->with('message','Your message has been save');
                        }
                      }

                  }

//-----------------------------------------------------------------------------------------------------------------------------------------------------

    public function get_data(){
        $read=DB::table('mails')->select('*')->orderBy('Mid', 'desc')->get();
      return view('Admin/admin_inbox',['read'=>$read]);

    }



    public function get_data_client(){
      $read=DB::table('mails')->select('*')->orderBy('Mid', 'desc')->get();
      return view('Client/client_inbox',['read'=>$read]);

    }


    public function get_sent_data(){
        $sent=DB::table('mails')->select('*')->orderBy('Mid', 'desc')->get();
      return view('Admin/admin_sent',['sent'=>$sent]);

    }

    public function get_sent_data_client(){
        $sent=DB::table('mails')->select('*')->orderBy('Mid', 'desc')->get();
      return view('Client/client_sent',['sent'=>$sent]);
    }



    public function dash_data(){
        $read=DB::table('mails')->select('*')->orderBy('Mid', 'desc')->get();
      return view('dash',['read'=>$read]);
    }


    public function delete_mail($Mid){

      DB::table('mails')->where('Mid',$Mid)->delete();

         return redirect()->back();
    }

//.....................................................................................................................................................................

    public function view_mail($Mid){

        if(Auth::User()->account_type="client"){
          DB::table('mails')
          ->where('Mid',$Mid)
          ->update(['read'=>"read"]);
        }
      else  if(Auth::User()->account_type="admin"){
          DB::table('mails')
          ->where('Mid',$Mid)
          ->update(['read'=>"1"]);


        }
      else  if(Auth::User()->account_type="manager"){
          DB::table('mails')
          ->where('Mid',$Mid)
          ->update(['read'=>"2"]);
        }
      else  if(Auth::User()->account_type="employee"){
          DB::table('mails')
          ->where('Mid',$Mid)
          ->update(['read'=>"3"]);
        }

              $read =mail::all()->where('Mid',$Mid);
              return view('Admin/one_mail_receive',['read'=>$read]);

    }


//..................................................................................................................................................................

    public function admin_forwad_mail($Mid){

          DB::table('mails')
          ->where('Mid',$Mid)
          ->update(['read'=>"1"]);

                  $read =mail::all()->where('Mid',$Mid);
                  $manager=user::all()->where('account_type',"manager");

                        return view('Admin/admin_forward_mail',['read'=>$read],['manager'=>$manager]);

    }
//.............................................................................................................................................................


public function manager_forwad_mail($Mid){

      DB::table('mails')
      ->where('Mid',$Mid)
      ->update(['read'=>"2"]);

              $read = DB::table('mails')
                    ->join('projects', 'mails.project_name', '=', 'projects.project_name')
                    ->select('mails.*','projects.*')
                    ->get();

                    return view('Manager/manager_forward_mail',['read'=>$read]);

}
//.............................................................................................................................................................

    public function new_client_mail(){
      $read=DB::table('mails')->select('*')->orderBy('Mid', 'desc')->get();

          return view('Admin/admin_newclient',['read'=>$read]);

    }


    public function manager_inbox(){
      $read=DB::table('mails')->select('*')->orderBy('Mid', 'desc')->get();
          return view('Manager/manager_inbox',['read'=>$read]);

    }
    public function manager_project_inbox(){
      $read = DB::table('mails')
            ->join('projects', 'mails.project_name', '=', 'projects.project_name')
            ->select('mails.*','projects.*')
            ->orderBy('Mid', 'desc')
            ->get();

          return view('Manager/manager_project_inbox',['read'=>$read]);

    }

    public function manager_sent(){
      $read=DB::table('mails')->select('*')->orderBy('Mid', 'desc')->get();
          return view('Manager/manager_sent',['read'=>$read]);

    }

    public function admin_mail(){
      $admin=DB::table('mails')->select('*')->orderBy('Mid', 'desc')->get();

          return view('layouts/admin',['admin'=>$admin]);

    }

    public function client_draft(){
      $read=DB::table('mails')->select('*')->orderBy('Mid', 'desc')->get();
          return view('Client/client_draft',['read'=>$read]);
    }
    public function admin_draft(){
      $read=DB::table('mails')->select('*')->orderBy('Mid', 'desc')->get();
          return view('Admin/admin_draft',['read'=>$read]);
    }

    public function manager_draft(){
      $read=DB::table('mails')->select('*')->orderBy('Mid', 'desc')->get();
          return view('Manager/manager_draft',['read'=>$read]);
    }
    public function employee_inbox(){
      $read=DB::table('mails')->select('*')->orderBy('Mid', 'desc')->get();
          return view('Employee/employee_inbox',['read'=>$read]);

    }
    public function employee_sent(){
      $read=DB::table('mails')->select('*')->orderBy('Mid', 'desc')->get();
          return view('Employee/employee_sent',['read'=>$read]);

    }
    public function employee_draft(){
      $read=DB::table('mails')->select('*')->orderBy('Mid', 'desc')->get();
          return view('Employee/employee_draft',['read'=>$read]);
    }

    public function forward_to_manager(Request $request){
      DB::table('mails')
      ->where('Mid',$request->Mid)
      ->update(['ForwardToManager'=>$request->to]);
        return redirect()->back()->with('message','Forward To Manager');
    }
    public function forward_to_employee(Request $request){
      DB::table('mails')
      ->where('Mid',$request->Mid)
      ->update(['ForwardToEmployee'=>$request->to]);
        return redirect()->back()->with('message','Forward To Employee');
    }


          public function one_mail_save($Mid){
            $read =mail::all()->where('Mid',$Mid);
            return view('Admin/one_mail_save',['read'=>$read]);
        }


        public function one_mail_sent($Mid){
          $read =mail::all()->where('Mid',$Mid);
          return view('Admin/one_mail_sent',['read'=>$read]);
      }

      public function resent($Mid){
        DB::table('mails')
        ->where('Mid',$Mid)
        ->update(['sent'=>"sent"]);
          return redirect()->back()->with('message','sent message');
      }

public function getDownload($attachment){

     $file= public_path(('/images/'.$attachment));
     return Response::download($file);
}



}


    ?>
