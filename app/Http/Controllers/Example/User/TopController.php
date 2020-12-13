<?php

namespace App\Http\Controllers\Example\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Company;

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
        Company::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'department_name' => $request->department_name,
            'address' => $request->address,
            'tel' => $request->tel,
        ]);

        return back();
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
