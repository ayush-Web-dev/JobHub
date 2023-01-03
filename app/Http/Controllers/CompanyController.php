<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Job;

class CompanyController extends Controller
{
    function Register(Request $req)
    {
        $company = new Company;
        $company->signup_fname = $req->signup_fname;
        $company->signup_lname = $req->signup_lname;
        $company->signup_compname = $req->signup_compname;
        $company->gst_number = $req->gst_number;
        $company->signup_address = $req->signup_address;
        $company->signup_city = $req->signup_city;
        $company->signup_email = $req->signup_email;
        $company->signup_mobileno = $req->signup_mobileno;
        $company->signup_password = Hash::make($req->signup_password);
        $company->signup_cpassword = Hash::make($req->signup_cpassword);
        $company->save();
        return redirect('login');
    }

    function index()
    {
        $data = Company::all();
        $content = Job::all();
        return view('seekerHome',['companies'=>$data, 'jobs'=>$content]);
    }

    function indexSecond()
    {
        $companies = Company::all();
        return view('admin.companies', ['company'=>$companies]);
    }

    public function delete($id)
    {
        $company = Company::findOrFail($id);
        $company->delete();

        return redirect('admin-companies')->with('status'.'Deleted Successfully');
    }

    public function store(Request $req)
    {
        $newCompany = new Company;
        $newCompany->signup_fname = $req->fname;
        $newCompany->signup_lname = $req->lname;
        $newCompany->signup_compname = $req->compname;
        $newCompany->gst_number = $req->gst;
        $newCompany->signup_address = $req->address;
        $newCompany->signup_city = $req->city;
        $newCompany->signup_email = $req->email;
        $newCompany->signup_mobileno = $req->mobile;
        $newCompany->signup_password = Hash::make($req->password);
        $newCompany->signup_cpassword = Hash::make($req->cpassword);
        $newCompany->save();
        return redirect('/admin-companies')->with('status','Seeker added successfully');
    }
}
