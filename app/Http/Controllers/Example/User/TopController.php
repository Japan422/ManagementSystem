<?php

namespace App\Http\Controllers\Example\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TopController extends Controller
{
    public function topPage()
    {
        return view('example.user.top_page');
    }

    public function registrationPage()
    {
        return view('example.user.registration_page');
    }

    public function registrationPagePost(Request $request)
    {
        dd($request->all());
    }

    public function userRegisterPage()
    {
        return view('example.user.userregister_page');
    }

    public function userLoginPage()
    {
        return view('example.user.userlogin_page');
    }
}
