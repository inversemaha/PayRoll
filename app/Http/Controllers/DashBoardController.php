<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashBoardController extends Controller
{

    function totalStudent(){
        $institute_id = Session()->get('users_institute_id');//echo$institute_id;
        $result = DB::table('student_personal_details')
           ->where('student_institute_id',$institute_id)
            ->get();

        $total_student=sizeof($result);
        return $total_student;
        //print_r( $result);
    }
}
