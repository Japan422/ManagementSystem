<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Company;

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

    public function userregisterPage()
    {
        return view('user/userregister_page');
    }

    public function userLoginPage()
    {
        return view('user.userlogin_page');
    }
}
