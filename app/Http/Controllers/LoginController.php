<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;

class LoginController extends Controller
{
    function viewFormLogin()
    {
        return view("formLogin");
    }

    function accessLogin(Request $request)
    {
        if ($request->username == "admin" && $request->password == "123456") {
           return view("customer.index");
        } else {
            return view("login_error");
        }
    }
}
