<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EmployeeSalary extends Controller
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


    public function index()
    {
        return view('admin_pages.salary.add_salary');
    }
}
