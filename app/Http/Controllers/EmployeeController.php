<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use DB;

class EmployeeController extends Controller
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

    public function addEmployee()
    {
        return view('admin_pages.employee.add_employee');
    }

    public function saveEmployee(Request $request)
    {

        $emp_full_name = $request->input('emp_full_name');
        $emp_father_name = $request->input('emp_father_name');
        $emp_birthday = $request->input('emp_birthday');
        $emp_gender = $request->input('gender');
        $emp_phn = $request->input('emp_phn');
        $emp_local_address = $request->input('emp_local_address');
        $emp_p_address = $request->input('emp_p_address');
        $nationality = $request->input('nationality');
        $emp_martial_status = $request->input('emp_martial_status');
        $resume = $request->input('resume');
        $email = $request->input('email');
        $password = $request->input('password');
        $emp_id = $request->input('emp_id');
        $department = $request->input('department');
        $designation = $request->input('designation_id');
        $date_of_joining = $request->input('date_of_joining');
        $joining_salary = $request->input('joining_salary');
        $active_status = 1;  //Status 1is active, 0 is deactive
        $account_holder_name = $request->input('account_holder_name');
        $account_number = $request->input('account_number');
        $bank_name = $request->input('bank_name');
        $branche = $request->input('branch');


        if ($request->hasFile('emp_image')) {
            $this->validate($request, [

                'emp_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);
            $image = $request->file('emp_image');

            $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/employe_image');
            $image->move($destinationPath, $input['imagename']);
        } else {
            $input['imagename'] = "default.jpg";
        }

        $emp_array = array('employee_name' => $emp_full_name,
            'employee_father_name' => $emp_father_name,
            'employee_birthday' => $emp_birthday,
            'gender' => $emp_gender,
            'employee_phone' => $emp_phn,
            'employee_local_address' => $emp_local_address,
            'employee_permanent_address' => $emp_p_address,
            'nationality' => $nationality,
            'employee_martial_status' => $emp_martial_status,
            'resume' => $resume,
            'email' => $email,
            'password' => $password,
            'employee_id' => $emp_id,
            'employee_department' => $department,
            'employee_designation' => $designation,
            'employee_date_of_joining' => $date_of_joining,
            'employee_joining_salary' => $joining_salary,
            'employee_account_holder_name' => $account_holder_name,
            'employee_account_number' => $account_number,
            'employee_bank_name' => $bank_name,
            'employee_bank_branch' => $branche,
            'active_status' => 1

        );

        $save_status = DB::table('employee_table')->insert($emp_array);
        return $emp_array;

        if ($save_status) {

            return view('admin_pages.employee.add_employee')->with('status', 'Employee addedd sucessfully');
        } else {
            return view('admin_pages.employee.add_employee')->with('status', 'There was  a problem.');
        }

    }

    public function viewEmployee()
    {
        $result['result'] = DB::table('employee_table')
            ->join('department_table', 'employee_table.employee_department', '=', 'department_table.department_id')
            ->join('designation_table', 'designation_table.department_id', '=', 'department_table.department_id')
            ->get();

        //print_r($result);
        return view('admin_pages.employee.view_employee', $result);
    }


    public function editEmployee($id)
    {


        $result['result'] = DB::table('employee_table')
            ->where('emp_id', $id)
            ->first();

        //print_r($result);
        return view('admin_pages.employee.edit_employee', $result);
    }

    public function deleteEmployee($id)
    {


        $result = DB::table('employee_table')
            ->where('emp_id', $id)
            ->delete();

        //print_r($result);
        return view('admin_pages.employee.view_employee', $result);
    }

    public function saveEditedEmployee(Request $request)
    {
        $emp_id = $request->input('emp_id');
        $emp_full_name = $request->input('emp_full_name');
        $emp_father_name = $request->input('emp_father_name');
        $emp_birthday = $request->input('emp_birthday');
        $emp_gender = $request->input('gender');
        $emp_phn = $request->input('emp_phn');
        $emp_local_address = $request->input('emp_local_address');
        $emp_p_address = $request->input('emp_p_address');
        $nationality = $request->input('nationality');
        $emp_martial_status = $request->input('emp_martial_status');
        $resume = $request->input('resume');
        $email = $request->input('email');
        $password = $request->input('password');
        $department = $request->input('department');
        $designation = $request->input('designation');
        $date_of_joining = $request->input('date_of_joining');
        $joining_salary = $request->input('joining_salary');
        $active_status = 1;  //Status 1is active, 0 is deactive
        $account_holder_name = $request->input('account_holder_name');
        $account_number = $request->input('account_number');
        $bank_name = $request->input('bank_name');
        $branche = $request->input('branch');


        $edit_emp_array = array('employee_name' => $emp_full_name,
            'employee_father_name' => $emp_father_name,
            'employee_birthday' => $emp_birthday,
            'gender' => $emp_gender,
            'employee_phone' => $emp_phn,
            'employee_local_address' => $emp_local_address,
            'employee_permanent_address' => $emp_p_address,
            'nationality' => $nationality,
            'employee_martial_status' => $emp_martial_status,
            'resume' => $resume,
            'email' => $email,
            'password' => $password,
            'employee_id' => $emp_id,
            'employee_department' => $department,
            'employee_designation' => $designation,
            'employee_date_of_joining' => $date_of_joining,
            'employee_joining_salary' => $joining_salary,
            'employee_account_holder_name' => $account_holder_name,
            'employee_account_number' => $account_number,
            'employee_bank_name' => $bank_name,
            'employee_bank_branch' => $branche,
            'active_status' => 1

        );
        $edit_save_status = DB::table('employee_table')->where('emp_id', $emp_id)->update($edit_emp_array);
        if ($edit_emp_array) {

            return view('admin_pages.employee.add_employee')->with('status', 'Employee addedd sucessfully');
        } else {
            return view('admin_pages.employee.add_employee')->with('status', 'There was  a problem.');
        }


    }

    public function employeeProfile($id)
    {


        $result['result'] = DB::table('employee_table')
            ->join('department_table', 'employee_table.employee_department', '=', 'department_table.department_id')
            ->join('designation_table', 'designation_table.department_id', '=', 'department_table.department_id')
            ->where('employee_table.emp_id', $id)
            ->first();
        //return $result;

        //print_r($result);
        return view('admin_pages.employee.employee_profile', $result);
    }

}
