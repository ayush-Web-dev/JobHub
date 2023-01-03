@extends('layouts.admin')

@section('title')
    JobHub - Admin
@endsection


@section('content')

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New Seeker</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="/save-seeker" method="POST">
            @csrf
            <div class="modal-body">
                <div class="form-group">
                  <label for="firstname" class="col-form-label">Firstname:</label>
                  <input type="text" name="fname" class="form-control" id="firstname">
                </div>
                <div class="form-group">
                  <label for="lastname" class="col-form-label">Lastname:</label>
                  <input type="text" name="lname" class="form-control" id="lastname">
                </div>
                <div>
                  <label for="gender" class="col-form-label" >Gender: </label>
                  <select id="gender" name="subject" class="form-control ">
                    <option value="" style="color:#8a8a8a">Select</option>
                    <option value="Female" class="colr">Female</option>
                    <option value="Male" class="colr">Male</option>
                  </select>        
                </div>
                <div class="form-group">
                  <label for="dob" class="col-form-label">Dob:</label>
                  <input
                            class="form-control input input-dob"
                            type="text"
                            id="dob"
                            name="dob"
                            placeholder="Date of Birth"
                            onfocus="(this.type='date')"
                            onblur="(this.value == '' ? this.type='text' : this.type='date')"
                            required />
                </div>
                <div class="form-group">
                  <label for="education" class="col-form-label">Education:</label>
                  <select id="education" name="education" class="form-control ">
                    <option value="">Select</option>
                    <option  value="Illiterate">Illiterate</option>
                    <option  value="Primery - 5th Pass">Primary - 5th Pass</option>
                    <option  value="Medium - 8th Pass">Medium - 8th Pass</option>
                    <option  value="Matric - 10th Pass">Matric - 10th Pass</option>
                    <option  value="Intermediate - 12th Pass">Intermediate - 12th Pass</option>
                    <option  value="Graduate - Bachelors Degree">Graduate - Bachelor's Degree</option>
                    <option  value="Post Graduate - Masters Degree">Post Graduate - Master's Degree</option>
                    <option  value="PHD">PHD</option>
                    <option  value="Other">Other</option>
                  </select> 
                </div>
                <div class="form-group">
                  <label for="exp" class="col-form-label">Experience:</label>
                  <select id="exp" name="exp" class="form-control">
                    <option value="">Select</option>
                    <option  value="Veteran">15+ Years - Veteran</option>
                    <option  value="Expert">10 - 14 Years - Expert</option>
                    <option  value="Experienced">6 - 9 Years - Experienced</option>
                    <option  value="Skilled">2 - 5 Years - Skilled</option>
                    <option  value="Fresher">Fresher - Unskilled</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="city" class="col-form-label">City:</label>
                  <select name="area" class="form-control">
                    <option value="" selected="selected">Select City</option>
                    <option  data-stateid="10" value="Delhi">Delhi</option>
                    <option  data-stateid="17" value="Bengaluru">Bengaluru</option>
                    <option  data-stateid="21" value="Mumbai">Mumbai</option>
                    <option  data-stateid="22" value="Mumbai">Kolkata</option>
                    <option  data-stateid="23" value="Mumbai">Chennai</option>
                    <option  data-stateid="24" value="Mumbai">Chandigarh</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="mobile" class="col-form-label">Mobile:</label>
                  <input type="number" name="mobile" class="form-control" id="mobile" maxlength="10">
                </div>
                <div class="form-group">
                  <label for="password" class="col-form-label">Password:</label>
                  <input type="password" name="password" class="form-control" id="password" maxlength="10">
                </div>
                <div class="form-group">
                  <label for="cpassword" class="col-form-label">Confirm Password:</label>
                  <input type="password" name="cpassword" class="form-control" id="cpassword" maxlength="10">
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
              <h4 class="card-title">Job Seekers
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal" >Add</button>
              </h4>

            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                    <table class="table">
                        <thead class=" text-primary">
                          <th>
                            Firstname
                          </th>
                          <th>
                            Lastname
                          </th>
                          <th>
                            Dob
                          </th>
                          <th>
                            Education
                          </th>
                          <th>
                            Experience
                          </th>
                          <th>
                            City
                          </th>
                          <th>
                            Mobile
                          </th>
                          <th>
                            Action
                          </th>
                        </thead>
                        <tbody>
                    @foreach ($seekers as $item)
                          <tr>
                            <td>
                                {{$item['firstname']}}
                            </td>
                            <td>
                                {{$item['lastname']}}
                            </td>
                            <td>
                                {{$item['dob']}}
                            </td>
                            <td>
                                {{$item['education']}}
                            </td>
                            <td>
                                {{$item['experience']}}
                            </td>
                            <td>
                                {{$item['city']}}
                            </td>
                            <td>
                                {{$item['mobile']}}
                            </td>
                            <td>
                              <form action="{{ url('seeker-delete/'.$item->id) }}" method="POST">
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