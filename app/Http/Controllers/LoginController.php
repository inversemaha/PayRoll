<?php

namespace App\Http\Controllers;

use App\User;
use App\Institute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware(function ($request, $next) {
            $login_session = $request->session()->get('user_id');
            $user_type = $request->session()->get('user_type');

            if ($login_session != NULL && $user_type=='1') {
                return redirect('/admin-home')->send();
            }else if($login_session != NULL && $user_type=='2'){
              return redirect('/user-home')->send();
            }
            return $next($request);
        });
    }

    public function login()
    {
        return view('login');
    }

    public function loginCheck(Request $request)
    {
        $user_email = $request->input('user_email');
        $password = $request->input('pwd');

        //$result=DB::table('users')->where('email', $email)->where('password', $password)->first();
        $result = User::where('user_email', $user_email)->where('user_password', $password)->first();
        if ($result) {

            $request->session()->put('user_id', $result->user_id);
            $request->session()->put('user_full_name', $result->user_full_name);

            $request->session()->put('user_type', $result->user_type);
           $request->session()->put('users_active_status', $result->users_active_status);


            if($result->user_type=='1'){
                //Super Admin
                return redirect('/admin-home')->send();
            }else if($result->user_type=='2'){
                return redirect('/user-home')->send();

            }

        } else {
            return Redirect('/login')->with('status','decline');
        }


    }


}
