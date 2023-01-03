<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Employer;
use App\Models\Seeker;
use App\Models\Company;
use App\Models\Admin;

class LoginController extends Controller
{
    function login(Request $req)
    {
        $company = Company::where(['signup_mobileno'=>$req->mobile])->first();
        $user = Seeker::where(['mobile'=>$req->mobile])->first();
        $employer = Employer::where(['signup_mobileno'=>$req->mobile])->first();
        $admin = Admin::where(['mobileno'=>$req->mobile])->first();

        if(!$company || !Hash::check($req->password, $company->signup_password)){
            // return redirect('/login-failed');
        }
        else{
            $req->session()->put('companies', $company);
            return redirect('/providerHome');
        }


        if(!$employer || !Hash::check($req->password, $employer->signup_password)){
            // return redirect('/login-failed');
        }
        else{
            $req->session()->put('employer', $employer);
            return redirect('/providerHome');
        }


        if(!$user || !Hash::check($req->password, $user->password)){
            // return redirect('/login-failed');
        }
        else{
            $req->session()->put('seeker', $user);
            return redirect('/seekerHome');
        }

        if(!$admin || !Hash::check($req->password, $admin->password)){
            // return redirect('/login-failed');
        }

        else{
            $req->session()->put('admin', $admin);
            return redirect('/admin');
        }

        if(true){
            return redirect('/login-failed');
        }

    }
}
