<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TopController extends Controller
{

    public function topPage()
    {
        return view('user/top_page');
    }

    public function registrationPage()
    {
        return view('user/registration_page');
    }

    public function userregisterPage()
    {
        return view('user/userregister_page');
    }

    public function userLoginPage()
    {
        return view('user.userlogin_page');
    }
}
