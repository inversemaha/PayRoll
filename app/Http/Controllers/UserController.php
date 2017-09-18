<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function storeUserDetails(Request $request)
    {
        $user_full_name = $request->input('user_full_name');
        $user_designation = $request->input('user_designation');
        $user_date_of_birth = $request->input('user_date_of_birth');
        $user_phone_number = $request->input('user_phone_number');
        $user_email = $request->input('user_email');
        $user_type = "";
        $user_password = $request->input('user_password');
        $users_institute_id = "";
        $users_active_status = "1";
        $user_picture = "";

        $userDetails = array('user_full_name' => $user_full_name,
            'user_designation' => $user_designation,
            'user_date_of_birth' => $user_date_of_birth,
            'user_phone_number' => $user_phone_number,
            'user_email' => $user_email,
            'user_type' => $user_type,
            'user_password' => $user_password,
            'users_institute_id' => $users_institute_id,
            'users_active_status' => $users_active_status,
            'user_picture' => $user_picture,
        );

        User::insert($userDetails);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
