<?php

namespace App\Http\Controllers\Example\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TopController extends Controller
{
    public function topPage()
    {
        return view('user.top_page');
    }

}
