@extends('layouts.admin')

@section('title')
    JobHub - Admin
@endsection



@section('content')


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New Company</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="/save-company" method="POST">
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
                  <label for="compname" class="col-form-label" >Company Name: </label>
                  <input class="form-control j-form-input-two" name="compname" id="compname" type="text"> 
                </div>
                <div class="form-group">
                  <label for="gst" class="col-form-label">GST Number:</label>
                  <input class="form-control j-form-input-two" name="gst" id="gst" type="text">
                </div>
                <div class="form-group">
                  <label for="address" class="col-form-label">Address:</label>
                  <input class="form-control j-form-input-two" name="address" id="address" type="text">
                </div>
                <div class="form-group">
                  <label for="city" class="col-form-label">City:</label>
                  <select name="city" id="city" class="form-control j-form-drop">
                    <option value="" selected="selected">Select City</option>
                    <option  data-stateid="10" value="Delhi">Delhi</option>
                    <option  data-stateid="17" value="Bengaluru">Bengaluru</option>
                    <option  data-stateid="21" value="Mumbai">Mumbai</option>
                    <option  data-stateid="11" value="Mumbai">Chandigarh</option>
                    <option  data-stateid="22" value="Mumbai">Bhopal</option>
                </select>
                </div>
                <div class="form-group">
                  <label for="email" class="col-form-label">Email:</label>
                  <input name="email" id="email" class="form-control j-form-input-one" type="Email"> 
                </div>
                <div class="form-group">
                  <label for="mobile" class="col-form-label">Mobile:</label>
                  <input placeholder="+91" disabled="disabled" class="form-control j-form-left" type="text"> 
                  <input placeholder="Mobile Number" name="mobile" id="mobile" class="form-control j-form-right landing_mobile mt-1" maxlength="10" type="number">
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
              <h4 class="card-title"> Registered Companies
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal" >Add new company</button>
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
                            Company Name
                          </th>
                          <th>
                            GST Number
                          </th>
                          <th>
                            Address
                          </th>
                          <th>
                            City
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Mobile
                          </th>
                          <th>
                            Action
                          </th>
                        </thead>
                        <tbody>
                    @foreach ($company as $item)
                          <tr>
                            <td>
                                {{$item['signup_fname']}}
                            </td>
                            <td>
                                {{$item['signup_lname']}}
                            </td>
                            <td>
                                {{$item['signup_compname']}}
                            </td>
                            <td>
                                {{$item['gst_number']}}
                            </td>
                            <td>
                                {{$item['signup_address']}}
                            </td>
                            <td>
                               {{$item['signup_city']}}
                            </td>
                            <td>
                                {{$item['signup_email']}}
                            </td>
                            <td>
                                {{$item['signup_mobileno']}}
                            </td>
                            <td>
                              <form action="{{ url('company-delete/'.$item->id) }}" method="POST">
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