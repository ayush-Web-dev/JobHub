@extends('layouts.admin')

@section('title')
    JobHub - Admin
@endsection



@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Job</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/save-job" method="POST">
        @csrf
        <div class="modal-body">
            <div class="form-group">
              <label for="title" class="col-form-label">Title:</label>
              <input type="text" name="title" class="form-control" id="title">
            </div>
            <div class="form-group">
              <label for="job_category" class="col-form-label">Category:</label>
              <select name="job_category" id="job_category" class="form-control j-form-drop jj-job-desc">
                <option value="">Select Category</option>
                <option value="Accountant" >Accountant</option>
                <option value="Babysitter" >Babysitter</option>
                <option value="Beautician" >Beautician</option>
                <option value="Bpo" >BPO</option>
                <option value="Mechanic" >Mechanic</option>
                <option value="Carpentry" >Carpentry</option>
                <option value="Construction-labourer" >Helper / Labour</option>
                <option value="Cook" >Cook</option>
                <option value="Customer-support-executive" >Help &amp; Support</option>
                <option value="Data-entry-operator" >Data Entry</option>
                <option value="Delivery" >Delivery</option>
                <option value="Driver" >Driver</option>
                <option value="Electrician" >Electrician</option>
                <option value="Housekeeping" >Housekeeping</option>
                <option value="It-professional" >IT Professional</option>
                <option value="Machinist" >Machinist</option>
                <option value="Management" >Management</option>
                <option value="Marketing" >Marketing</option>
                <option value="Peon" >Peon</option>
                <option value="Personal-assistant" >Personal Asst.</option>
                <option value="Receptionist" >Receptionist</option>
                <option value="Sales" >Sales</option>
                <option value="Security" >Security</option>
                <option value="Tailoring" >Tailoring</option>
                <option value="Waiter" >Waiter</option>
                <option value="Plumber" >Plumber</option>
            </select> 
            </div>
            <div>
              <label for="job_salary" class="col-form-label" >Salary: </label>
              <select name="job_salary" id="job_salary" class="form-control j-form-drop jr-input">
                <option value="">Salary Range</option>
                <option value="Less than ₹10000" >Less than ₹10000</option>
                <option value="₹11000 - ₹15000" >₹11000 - ₹15000</option>
                <option value="₹16000 - ₹20000" >₹16000 - ₹20000</option>
                <option value="₹21000 - ₹25000" >₹21000 - ₹25000</option>
                <option value="₹26000 - ₹30000" >₹26000 - ₹30000</option>
                <option value="₹31000 - ₹40000" >₹31000 - ₹40000</option>
                <option value="₹41000 - ₹50000" >₹41000 - ₹50000</option>
                <option value="More than ₹50000" >More than ₹50000</option>
                <option value="Best in the industry" >Best in the industry</option>
            </select>         
            </div>
            <div class="form-group">
              <label for="job_type" class="col-form-label">Type:</label>
              <select name="job_type" id="job_type" class="form-control j-form-drop">
                <option value="">Select Job Type</option>
                <option value="Contract" >Contract</option>
                <option value="Freelance" >Freelance</option>
                <option value="Full-time" >Full Time</option>
                <option value="Internship" >Internship</option>
                <option value="Part-time" >Part Time</option>
                <option value="Temporary" >Temporary</option>
            </select> 
            </div>
            <div class="form-group">
              <label for="job_experience" class="col-form-label">Experience:</label>
              <select name="job_experience" id="job_experience" class="form-control j-form-drop">
                <option value="">Experience Level</option>
                <option value="doesnt-matter">Does not Matter </option>
                <option value="Fresher" >Fresher (Unskilled) </option>
                <option value="Skilled" >2 - 5 Years (Skilled) </option>
                <option value="Experienced" >6 - 9 Years (Experienced) </option>
                <option value="Expert" >10 - 14 Years (Expert) </option>
                <option value="Veteran" >15+ Years (Veteran) </option>
            </select>
            </div>
            <div class="form-group">
              <label for="job_vacancy" class="col-form-label">Vacancy:</label>
              <select name="job_vacancy" id="job_vacancy" class="form-control j-form-drop">
                <option value="">No. of Vacancies</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
            </div>
            <div class="form-group">
                <textarea rows="4" class="form-control change-textarea" spellcheck="true" cols="" name="job_description" id="job_description" placeholder="Job Description"></textarea>
              </textarea>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>


    <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Listed Jobs
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal" >Add new job</button>
              </h4>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                    <table class="table">
                        <thead class=" text-primary">
                          <th>
                            Title
                          </th>
                          <th>
                            Category
                          </th>
                          <th>
                            Salary
                          </th>
                          <th>
                            Type
                          </th>
                          <th>
                            Experience
                          </th>
                          <th>
                            Vacancy
                          </th>
                          <th>
                            Description
                          </th>
                          <th>
                            Action
                          </th>
                        </thead>
                        <tbody>
                    @foreach ($jobs as $item)
                          <tr>
                            <td>
                                {{$item['job_title']}}
                            </td>
                            <td>
                                {{$item['job_category']}}
                            </td>
                            <td>
                                {{$item['job_salary']}}
                            </td>
                            <td>
                                {{$item['job_type']}}
                            </td>
                            <td>
                                {{$item['job_experience']}}
                            </td>
                            <td>
                                {{$item['job_vacancy']}}
                            </td>
                            <td>
                                {{$item['job_description']}}
                            </td>
                            <td>
                              <a href="{{ url('admin-jobs/'.$item->id) }}" class="btn btn-sm btn-success">Edit</a>
                              <form action="{{ url('job-delete/'.$item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                              </form>
                            </td>
                          </tr>
                    @endforeach
                        </tbody>
                      </table>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>

@endsection



@section('scripts')

@endsection