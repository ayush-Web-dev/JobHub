<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Seeker; 

class SeekerController extends Controller
{
    function register(Request $req)
    {
        $seeker = new Seeker;
        $seeker->firstname = $req->seeker_name;
        $seeker->lastname = $req->seeker_lname;
        $seeker->gender = $req->seeker_subject;
        $seeker->dob= $req->seeker_dob;
        $seeker->education = $req->seeker_education;
        $seeker->experience = $req->seeker_exp;
        $seeker->city = $req->seeker_area;
        $seeker->mobile = $req->seeker_mobile;
        $seeker->password = Hash::make($req->password);
        $seeker->confirm_password = Hash::make($req->seeker_cpassword);
        $seeker->save();
        return redirect('login');
    }

    function index()
    {
        $data = Seeker::all();
        return view('admin.seekers', ['seekers'=>$data]);
    }

    public function store(Request $req)
    {
        $newSeeker = new Seeker;
        $newSeeker->firstname = $req->fname;
        $newSeeker->lastname = $req->lname;
        $newSeeker->gender = $req->subject;
        $newSeeker->dob= $req->dob;
        $newSeeker->education = $req->education;
        $newSeeker->experience = $req->exp;
        $newSeeker->city = $req->area;
        $newSeeker->mobile = $req->mobile;
        $newSeeker->password = Hash::make($req->password);
        $newSeeker->confirm_password = Hash::make($req->cpassword);
        $newSeeker->save();
        return redirect('/admin-seekers')->with('success','Seeker added successfully');
    }

    public function delete($id)
    {
        $seeker = Seeker::findOrFail($id);
        $seeker->delete();

        return redirect('admin-seekers')->with('status'.'Deleted Successfully');
    }

}
