<?php


namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\feedback;
use DB;
use Charts;
use App\user;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class feedback_controller extends Controller
{
    public function store_feedback(Request $request){

        $feedback= new feedback();
        if($request->input('project_name')!="None"){

        $feedback->project_name=$request->input('project_name');
        $feedback->client_email= Auth::User()->email;
        $feedback->Q1=$request->input('Q1');
        $feedback->Q2=$request->input('Q2');
        $feedback->Q3=$request->input('Q3');
        $feedback->Q4=$request->input('Q4');
        $feedback->Q5=$request->input('Q5');

        $feedback->save();
        return redirect()->back()->with('message','Thank you,Your Feedback has been sent');
}
      return redirect()->back()->with('message','Select Project correctly');


    }


 public function chartjs()
    {
        $visitor = DB::table('feedback')
                    ->select(
                        DB::raw("project_name as project"),
                        DB::raw("COUNT(project_name) as total_fb"),
                        DB::raw("SUM(Q1) as total_Q1"),
                        DB::raw("SUM(Q2) as total_Q2"),
                        DB::raw("SUM(Q3) as total_Q3"),
                        DB::raw("SUM(Q4) as total_Q4"),
                        DB::raw("SUM(Q5) as total_Q5"))

                        ->groupBy(DB::raw("project_name"))
                    ->get();


          $result[] = ['project','Expectations','Satisfaction','Q4','Recommend','value'];
        foreach ($visitor as $key => $value) {
            $result[++$key] = [$value->project, (int)$value->total_Q1/$value->total_fb, (int)$value->total_Q2/$value->total_fb, (int)$value->total_Q3/$value->total_fb, (int)$value->total_Q4/$value->total_fb, (int)$value->total_Q5/$value->total_fb];
        }

       return view('Manager/view_feedback')
                ->with('visitor',json_encode($result));
    }



    }
