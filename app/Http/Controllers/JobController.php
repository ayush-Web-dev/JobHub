<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    function Register(Request $req)
    {
        $job = new Job;
        $job->job_title = $req->job_title;
        $job->job_category = $req->job_category;
        $job->job_salary = $req->job_salary;
        $job->job_type= $req->job_type;
        $job->job_experience = $req->job_experience;
        $job->job_vacancy = $req->job_vacancy;
        $job->job_description = $req->job_description;
        $job->save();
        return redirect('/providerHome');
    }
    function index()
    {
        $data = Job::all();
        return view('admin.jobs', ['jobs'=>$data]);
    }

    function edit($id)
    {
        $Job = Job::findOrFail($id);
        return view('admin.jobs-edit')
        ->with('Job', $Job);
    } 

    public function store(Request $req)
    {
        $newJob = new Job;
        $newJob->job_title = $req->title;
        $newJob->job_category = $req->job_category;
        $newJob->job_salary = $req->job_salary;
        $newJob->job_type= $req->job_type;
        $newJob->job_experience = $req->job_experience;
        $newJob->job_vacancy = $req->job_vacancy;
        $newJob->job_description = $req->job_description;
        $newJob->save();
        return redirect('/admin-jobs')->with('status','Seeker added successfully');
    }

    public function update(Request $req, $id)
    {
        $updateJob = Job::findOrFail($id);
        $updateJob->job_title = $req->title;
        $updateJob->job_category = $req->job_category;
        $updateJob->job_salary = $req->job_salary;
        $updateJob->job_type= $req->job_type;
        $updateJob->job_experience = $req->job_experience;
        $updateJob->job_vacancy = $req->job_vacancy;
        $updateJob->job_description = $req->job_description;
        $updateJob->update();

        return redirect('admin-jobs')->with('status', 'Updated Successfully');
    }

    public function delete($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();

        return redirect('admin-jobs')->with('status'.'Deleted Successfully');
    }

}
