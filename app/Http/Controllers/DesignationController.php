<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;

class DesignationController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {

            $user_id = $request->session()->get('user_id');
            $user_type = $request->session()->get('user_type');
            if ($user_id == NULL OR $user_type != 1) {
                return redirect::to('/login')->send();
            }
            return $next($request);
        });
    }

    public function designationHome()
    {
        $result['result'] = DB::table('department_table')
            ->get();

        return view('admin_pages.designation.add_designation', $result);
    }

    public function saveDesignation(Request $request)
    {
        $departement_id = $request->input('department_id');
        $designation_name = $request->input('designation_name');

        $designation_array = array('designation_name' => $designation_name,
            'department_id' => $departement_id);

        $status = DB::table('designation_table')->insert($designation_array);

        if ($status) {

            return back()->with('success', "Designation Added Succcessfully");
        } else {
            return back()->with('decline', "Designation Not Added");
        }
    }

    public function viewDesignation()
    {

        $result['result'] = DB::table('designation_table')
            ->join('department_table', 'designation_table.department_id', '=', 'department_table.department_id')
            ->get();

        return view('admin_pages.designation.view_designation', $result);
    }

    public function departmentWiseDesignation($id)
    {
        $result = DB::table('designation_table')
            ->where('department_id', $id)
            ->get();

        return $result;

    }
}
