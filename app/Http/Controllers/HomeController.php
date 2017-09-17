<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;
use DB;
class HomeController extends Controller
{


    //This constructor will check everytime is our user already logged in or not.
    //If login status is logout then it will redirect user to login page.
    //We have to put this controller in every controller except Login controller

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

    public function logout()
    {
        session()->forget('user_id');
        session()->forget('institute_id');
        session()->forget('user_type');
        session()->forget('user_email');
        session()->forget('user_designation');
        session()->forget('user_full_name');
        session()->flush();
        return Redirect::to('/login')->send();

    }

    public function adminHome()
    {
        return view('admin_pages.home');

    }


}
