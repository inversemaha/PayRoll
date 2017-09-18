<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;

class AttendanceController extends Controller
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

    public function importAttendance(){
        return view('admin_pages.attendance.import_attendance');

    }
    public function saveImportedAttendance(){
        return 'Save';
        return view('admin_pages.attendance.import_attendance');

    }
    public function viewAttendance(){

        return view('admin_pages.attendance.view_attendance');

    }
}
