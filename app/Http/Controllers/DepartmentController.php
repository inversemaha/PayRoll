<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DepartmentController extends Controller
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

    public function setUpDepartment(){
        return view('admin_pages.department.department_setup');
    }

    public function saveDepartment(Request $request){
        $department=$request->input('department_name');

        $dept_array=array('department_name'=>$department);
        $status=DB::table('department_table')->insert($dept_array);
        if($status){
            return back()->with('success',"Department Added Succcessfully");
        }else{
            return back()->with('decline',"Department Not Added");
        }

    }
    public function viewDepartment(){

        $result['result']=DB::table('department_table')
            ->get();

        return view('admin_pages.department.view_department',$result);
        //return $result;


    }
}
