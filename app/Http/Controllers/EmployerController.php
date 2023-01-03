<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Employer;

class EmployerController extends Controller
{
    function Register(Request $req)
    {
        $employee = new Employer;
        $employee->signup_fname = $req->signup_fname;
        $employee->signup_lname = $req->signup_lname;
        $employee->signup_city = $req->signup_city;
        $employee->signup_email = $req->signup_email;
        $employee->signup_address = $req->signup_address;
        $employee->id_proofs = $req->file('formFileMultiple')->store('proofDocs');
        $employee->signup_mobileno = $req->signup_mobileno;
        $employee->signup_password = Hash::make($req->signup_password);
        $employee->signup_cpassword = Hash::make($req->signup_cpassword);
        $employee->save();
        return redirect('login');
    }

    function index()
    {
        $data = Employer::all();
        return view('admin.employee', ['employee'=>$data]);
    }

    public function delete($id)
    {
        $employee = Employer::findOrFail($id);
        $employee->delete();

        return redirect('admin-employee')->with('status'.'Deleted Successfully');
    }

    public function store(Request $req)
    {
        $newEmployer = new Employer;
        $newEmployer->signup_fname = $req->fname;
        $newEmployer->signup_lname = $req->lname;
        $newEmployer->signup_city = $req->city;
        $newEmployer->signup_email = $req->email;
        $newEmployer->signup_address = $req->address;
        $newEmployer->signup_mobileno = $req->mobileno;
        $newEmployer->signup_password = Hash::make($req->password);
        $newEmployer->signup_cpassword = Hash::make($req->cpassword);
        $newEmployer->save();
        return redirect('/admin-employee')->with('status','Employee added successfully');
    }
}
