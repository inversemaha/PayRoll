<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Redirect;
use DB;

class WorkingsetupController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {

            $user_id = $request->session()->get('user_id');
            if ($user_id == NULL) {
                return redirect::to('/login')->send();
            }
            return $next($request);
        });
    }

    public function setUpWorkingday(){
        return view('admin_pages.workingday.workingday_setup');
    }


    public function saveWorkingDay(Request $request){
        $saturday_check_status=$request->input('saturday_check_status');
        if($saturday_check_status!='on'){
            $saturday_check_status="off";
        }
        $saturday_starting_hour=$request->input('saturday_starting_hour');
        $saturday_ending_hour=$request->input('saturday_ending_hour');
        //echo$saturday_check_status.$saturday_starting_hour.$saturday_ending_hour;

        $sunday_check_status=$request->input('sunday_check_status');
        if($sunday_check_status !='on'){
            $sunday_check_status="off";
        }
        $sunday_starting_hour=$request->input('sunday_starting_hour');
        $sunday_ending_hour=$request->input('sunday_ending_hour');
        echo$sunday_check_status.$sunday_starting_hour.$sunday_ending_hour;

        $monday_check_status=$request->input('monday_check_status');
        if($monday_check_status !='on'){
            $monday_check_status="off";
        }
        $monday_starting_hour=$request->input('monday_starting_hour');
        $monday_ending_hour=$request->input('monday_ending_hour');
        //echo$monday_check_status.$monday_starting_hour.$monday_ending_hour;

        $tuesday_check_status=$request->input('tuesday_check_status');
        if($tuesday_check_status !='on'){
            $tuesday_check_status="off";
        }
        $tuesday_starting_hour=$request->input('tuesday_starting_hour');
        $tuesday_ending_hour=$request->input('tuesday_ending_hour');
        //echo$tuesday_check_status.$tuesday_starting_hour.$tuesday_ending_hour;

        $wednesday_check_status=$request->input('wednesday_check_status');
        if($wednesday_check_status !='on'){
            $wednesday_check_status="off";
        }
        $wednesday_starting_hour=$request->input('wednesday_starting_hour');
        $wednesday_ending_hour=$request->input('wednesday_ending_hour');
        //echo$wednesday_check_status.$wednesday_starting_hour.$wednesday_ending_hour;

        $thursday_check_status=$request->input('thursday_check_status');
        if($thursday_check_status!='on'){
            $thursday_check_status="off";
        }
        $thursday_starting_hour=$request->input('thursday_starting_hour');
        $thursday_ending_hour=$request->input('thursday_ending_hour');
        //echo$thursday_check_status.$thursday_starting_hour.$thursday_ending_hour;

        $friday_check_status=$request->input('friday_check_status');
        if($friday_check_status!='on'){
            $friday_check_status="off";
        }
        $friday_starting_hour=$request->input('friday_starting_hour');
        $friday_ending_hour=$request->input('friday_ending_hour');
        //echo$friday_check_status.$friday_starting_hour.$friday_ending_hour;

        $saturday_working_day_array=array('day'=>'saturday',
            'working_day_status'=>$saturday_check_status,
            'office_starting_time'=>$saturday_starting_hour,
            'office_closing_time'=>$saturday_ending_hour
            );

        $sunday_working_day_array=array('day'=>'sunday',
            'working_day_status'=>$sunday_check_status,
            'office_starting_time'=>$sunday_starting_hour,
            'office_closing_time'=>$sunday_ending_hour
        );

        $monday_working_day_array=array('day'=>'monday',
            'working_day_status'=>$monday_check_status,
            'office_starting_time'=>$monday_starting_hour,
            'office_closing_time'=>$monday_ending_hour
        );

        $tuesday_working_day_array=array('day'=>'tuesday',
            'working_day_status'=>$tuesday_check_status,
            'office_starting_time'=>$tuesday_starting_hour,
            'office_closing_time'=>$tuesday_ending_hour
        );

        $wednesday_working_day_array=array('day'=>'wednesday',
            'working_day_status'=>$wednesday_check_status,
            'office_starting_time'=>$wednesday_starting_hour,
            'office_closing_time'=>$wednesday_ending_hour
        );

        $thursday_working_day_array=array('day'=>'thursday',
            'working_day_status'=>$thursday_check_status,
            'office_starting_time'=>$thursday_starting_hour,
            'office_closing_time'=>$thursday_ending_hour
        );

        $friday_working_day_array=array('day'=>'friday',
            'working_day_status'=>$friday_check_status,
            'office_starting_time'=>$friday_starting_hour,
            'office_closing_time'=>$friday_ending_hour
        );

        $insert_status=DB::table('working_day_setup')->insert($saturday_working_day_array);
        $insert_status1=DB::table('working_day_setup')->insert($sunday_working_day_array);
        $insert_status=DB::table('working_day_setup')->insert($monday_working_day_array);
        $insert_status=DB::table('working_day_setup')->insert($tuesday_working_day_array);$insert_status=DB::table('working_day_setup')->insert($wednesday_working_day_array);
        $insert_status=DB::table('working_day_setup')->insert($thursday_working_day_array);
        $insert_status=DB::table('working_day_setup')->insert($friday_working_day_array);


        if($insert_status){
            return back()->with('message','Data successfully Inserted');
        }else{
            return back()->with('message','Data Not Inserted');
        }

    }

    public function viewWorkingday(){
        $result['result']=DB::table('working_day_setup')->get();
        //return $result;
        return view('admin_pages.workingday.view_workingday_setup',$result);
    }
    public function editWorkingDay($working_day_id){

        return $working_day_id;

        $result['result']=DB::table('working_day_setup')->get();
        //return $result;
        return view('admin_pages.workingday.view_workingday_setup',$result);
    }
    public function deleteWorkingDay($working_day_id){

        //return $working_day_id;

        $result=DB::table('working_day_setup')
            ->where('working_day_id',$working_day_id)
            ->delete();
        //return $result;
        if($result){
            return back()
                ->with('message',"Deleted Successfully");
        }else{
            return back()
                ->with('message',"There was a problem");
        }

    }
}
