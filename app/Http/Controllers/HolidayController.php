<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
class HolidayController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {

            $user_id = $request->session()->get('user_id');
            $user_type = $request->session()->get('user_type');
            if ($user_id == NULL OR $user_type!=1) {
                return redirect::to('/login')->send();
            }
            return $next($request);
        });
    }

    public function holidayHome(){


        return view('admin_pages.holiday.add_holiday');
    }




    public function saveHoliday(Request $request){

        $holiday_date=$request->input('holiday_date');
        $holiday_occasion=$request->input('holiday_occasion');

        $holiday_array=array('holiday_date'=>$holiday_date,
            'holiday_occasion'=>$holiday_occasion);

        $status=DB::table('holiday_table')->insert($holiday_array);

        if($status){
            return back()->with('success',"Holiday Added Added Succcessfully");
        }else{
            return back()->with('decline',"Holiday Not Added");
        }
    }

    public function viewHoliday(){

        $result['result']=DB::table('holiday_table')->get();
        return $result;
        return view('admin_pages.holiday.add_holiday',$result);
    }

}
