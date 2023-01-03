@extends('master')
@extends('layouts.app')
<head>
<title>Signup - JobSeeker</title>
<link rel="stylesheet" href="{{ url('css/signup.css')}}">
</head>
<body>   
  <section class="banner" id="top-form">

    <div class="seeker-container container">
      <div class="ban-content pb-5">
        <div class="row mt-5 pt-5">
          <div class="col-md-12 col-sm-12 form-filled jbl-main row">
            <div class="col-2 jbl-left me-5 ms-2 text-center">
              <img src="https://www.just.jobs/wp-content/themes/justjobs/home-image/cat-icon.svg" title="Find Jobs In India" height="110">
            </div>  
            <div class="col-9 jbl-right text-center ms-4">
              <h2 style="font-family: Montserrat; font-weight:900; padding-top:.5rem;">Jobseeker Registration</h2>
              <p>Sign-up to apply on local &#038; verified driver, delivery, beautician, office boy, tailor, cook and many more jobs</p>
            </div>  
          </div>
          <div class="form-filled-main mt-4">
            <div class="jobseeker-banner-left">
              <h2 class="large pt-4 px-3"> Enter candidate details</h2>
              <hr>
              <form action="signup-Jobseeker" method="POST">
                @csrf
                <div class="row">
                  <div class="col-md-6 col-sm-6" style="">
                    <div class="input-group filled"> 
                      <input class="form-control input" name="seeker_name" placeholder="First Name"> 
                      <span class="hint--top hint--medium hint--rounded" aria-label="Enter your first name"><i class="fas fa-question-circle" aria-hidden="true"></i></span>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6" style="">
                    <div class="input-group filled"> 
                      <input class="form-control input" name="seeker_lname" placeholder="Last Name">  
                      <span class="hint--top hint--medium hint--rounded" aria-label="Type your last name"><i class="fas fa-question-circle" aria-hidden="true"></i></span>
                    </div>
                  </div>
                </div>
              
                <div class="row">
                  <div class="col-md-6 col-sm-6" style="">
                    <div class="input-group filled"> 
                      <select id="seeker_subject" name="seeker_subject" class="form-control input-list-menu">
                        <option value="" style="color:#8a8a8a">Gender</option>
                        <option value="Female" class="colr">Female</option>
                        <option value="Male" class="colr">Male</option>
                      </select> <span class="hint--top hint--medium hint--rounded" aria-label="Select gender"><i class="fas fa-question-circle" aria-hidden="true"></i></span>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6" style="">
                    <div class="input-group filled"> 
                      <input
                          class="form-control input input-dob"
                          type="text"
                          id="dob"
                          name="seeker_dob"
                          placeholder="Date of Birth"
                          onfocus="(this.type='date')"
                          onblur="(this.value == '' ? this.type='text' : this.type='date')"
                          required />
                      <span class="hint--top hint--medium hint--rounded" aria-label="Select Your DOB from Calendar, Do not type it."><i class="fas fa-question-circle" aria-hidden="true"></i></span><em id="cal-btn1" class="cal-btn"></em> 
                    </div> 
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 col-sm-6" style="">
                    <div class="input-group filled"> 
                      <select id="seeker_education" name="seeker_education" class="form-control input-list-menu">
                        <option value="">Education</option>
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
                      <span class="hint--top hint--medium hint--rounded" aria-label="Select your top educational qualification"><i class="fas fa-question-circle" aria-hidden="true"></i></span>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6" style="">
                    <div class="input-group filled"> 
                      <select id="seeker_exp" name="seeker_exp" class="form-control input-list-menu">
                        <option value="">Experience</option>
                        <option  value="Veteran">15+ Years - Veteran</option>
                        <option  value="Expert">10 - 14 Years - Expert</option>
                        <option  value="Experienced">6 - 9 Years - Experienced</option>
                        <option  value="Skilled">2 - 5 Years - Skilled</option>
                        <option  value="Fresher">Fresher - Unskilled</option>
                      </select><span class="hint--top hint--medium hint--rounded" aria-label="Tell us your work experience level"><i class="fas fa-question-circle" aria-hidden="true"></i></span> 
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-6 col-sm-6">
                    <div class="input-group filled">
                      <select name="seeker_area" class="form-control input-list-menu input-list-menu-one">
                        <option value="" selected="selected">Select City</option>
                        <option  data-stateid="10" value="Delhi">Delhi</option>
                        <option  data-stateid="17" value="Bengaluru">Bengaluru</option>
                        <option  data-stateid="21" value="Mumbai">Mumbai</option>
                      </select>
                      <span class="hint--top hint--medium hint--rounded" aria-label="Select your current city">
                        <i class="fas fa-question-circle" aria-hidden="true"></i>
                      </span>
                    </div>
                  </div>
                
                  <div class="col-lg-6 col-sm-6">
                    <div class="input-group filled"> 
                      <input class="form-control input input-one" name="seeker_mobile" placeholder="10 Digit Mobile Number" maxlength="10"> 
                      <span class="hint--top hint--medium hint--rounded" aria-label="Enter your mobile number">
                        <i class="fas fa-question-circle" aria-hidden="true"></i>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-6 col-sm-6">
                    <div class="input-group filled"> 
                      <input class="form-control input input-one" name="password" placeholder="Enter Password" required> 
                      <span class="hint--top hint--medium hint--rounded" aria-label="Enter your password">
                        <i class="fas fa-question-circle" aria-hidden="true"></i>
                      </span>
                    </div>
                  </div>
                
                  <div class="col-lg-6 col-sm-6">
                    <div class="input-group filled"> 
                      <input class="form-control input input-one" name="seeker_cpassword" placeholder="Confirm Password"> 
                      <span class="hint--top hint--medium hint--rounded" aria-label="Re-confirm password">
                        <i class="fas fa-question-circle" aria-hidden="true"></i>
                      </span>
                    </div>
                  </div>
                </div>

                <label class="we-label mt-3"><input type="checkbox" name="day_choice" value="weekly" /> Subscribe for weekly SMS jobs alert </label>

                <div class="input-group filled mt-4 mb-5" style="margin-bottom:0px;">
                  <button class="btn button-md btn-success cat-btn load1" data-loading-text="Please wait..." type="submit" title="Search Job Matlab JobHub"> Register & Search Jobs </button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
</body>

