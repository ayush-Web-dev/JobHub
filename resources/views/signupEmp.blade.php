@extends('master')
@extends('layouts.app')
<head>
<title>Signup - Employee</title>
<link rel="stylesheet" href="{{ url('css/signup.css')}}">
</head>
<body>
    <section class="pt-5 pb-5 mt-5">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-12 col-sm-12 form-filled jbl-main row">
                    <div class="col-2 jbl-left me-5 ms-2 text-center">
                    <img src="https://www.just.jobs/wp-content/themes/justjobs/home-image/cat-icon.svg" title="Find Jobs In India" height="110">
                    </div>  
                    <div class="col-9 jbl-right text-center ms-4">
                    <h2 style="font-family: Montserrat; font-weight:900; padding-top:.5rem;">Employer Registration</h2>
                    <p>Sign-up to post Jobs &#038; want to hire the best workers around you. 100% verified users.</p>
                    </div>  
                </div>
            </div>
        </div>
        <div class="j-employer-left-panel container pt-1">
            <div class="j-form-step-one advanced-sec">
                <div class="row p-3 mb-4" id="company_reg" style="box-shadow: 2px 2px 12px #ccc; border-radius:10px;">
                    <div class="col-12 text-start mb-4">
                        <h3>Want to register as -</h3>
                    </div>
                    <div class="col-12">
                        <input type="button" class="btn btn-primary one mx-3" onclick="showForm1();" value="Company" />
                        <input type="button" class="btn btn-primary two"  onclick="showForm2();" value=" Individual" />
                    </div>
                </div>

                {{-- COMPANY DETAILS FORM --}}
                <form action="signup-Company" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="jp-plan-main" id="jp-plan-main" style="display:none">
                        <h4>Enter company details</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 j-margin-bot">
                                <input class="form-control j-form-input-one" placeholder="First Name" name="signup_fname" id="signup_fname" type="text"> <span class="hint--top hint--medium hint--rounded" aria-label="Enter your first name">
                                </span>
                            </div>
                            <div class="col-md-6 col-sm-6 j-margin-bot">
                                <input class="form-control j-form-input-one" placeholder="Last Name" name="signup_lname" id="signup_lname" type="text"> <span class="hint--top hint--medium hint--rounded" aria-label="Enter your last name">
                                </span>
                            </div>
                            <div class="col-md-6 col-sm-6 j-margin-bot">
                                <input class="form-control j-form-input-two" placeholder="Business or Company Name" name="signup_compname" id="signup_compname" type="text"> <span class="hint--top hint--medium hint--rounded" aria-label="Enter your company name">
                                </span>
                            </div>
                            <div class="col-md-6 col-sm-6 j-margin-bot">
                                <input class="form-control j-form-input-two" placeholder="Business or Company GST number" name="gst_number" id="gst_number" type="text"> <span class="hint--top hint--medium hint--rounded" aria-label="Enter your company GST number">
                                </span>
                            </div>
                            <div class="col-md-6 col-sm-6 j-margin-bot">
                                <input class="form-control j-form-input-two" placeholder="Locality (Area)" name="signup_address" id="signup_address" type="text"> <span class="hint--top hint--medium hint--rounded" aria-label="Enter the area/mohalla name. For example: Patel Nagar East">
                                </span>
                            </div>
                            <div class="col-md-6 col-sm-6 j-margin-bot">
                                <select name="signup_city" id="signup_city" class="form-control j-form-drop">
                                    <option value="" selected="selected">Select City</option>
                                    <option  data-stateid="10" value="Delhi">Delhi</option>
                                    <option  data-stateid="17" value="Bengaluru">Bengaluru</option>
                                    <option  data-stateid="21" value="Mumbai">Mumbai</option>
                                </select> 
                                <span class="hint--top hint--medium hint--rounded" aria-label="Enter city name">
                                </span>
                            </div>
                            <div class="col-md-6 col-sm-6 j-margin-bot">
                                <input placeholder="Email" name="signup_email" id="signup_email" class="form-control j-form-input-one" type="Email"> 
                                <span class="hint--top hint--medium hint--rounded" aria-label="Use real & working email, candidates will contact you">
                                </span>
                            </div>
                            <div class="col-md-6 col-sm-6 j-margin-bot">
                                <input placeholder="+91" disabled="disabled" class="form-control j-form-left" type="text"> 
                                <input placeholder="Mobile Number" name="signup_mobileno" id="signup_mobileno" class="form-control j-form-right landing_mobile mt-1" maxlength="10" type="text">
                            </div>
                            <div class="col-md-6 col-sm-6 j-margin-bot">
                                <input placeholder="Set Password" name="signup_password" id="signup_password" class="form-control j-form-input-one" type="password">
                            </div>
                            <div class="col-md-6 col-sm-6 j-margin-bot">
                                <input placeholder="Confirm Password" name="signup_cpassword" id="signup_cpassword" class="form-control j-form-input-one" type="password">
                            </div>
                            <div class="input-group filled" style="margin-bottom:0px;">
                                <button type="submit" class="btn button-md btn-success cat-btn load1" data-loading-text="Please wait..." type="submit"> Register </button>
                            </div>
                        </div>
                    </div>
                </form>

                <form action="signup-Employee" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="jp-individual-main" id="jp-individual-main" style="display:none">
                        <h4>Enter your details</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-6 col-sm-6 j-margin-bot">
                                <input class="form-control j-form-input-one" placeholder="First Name" name="signup_fname" id="signup_fname" type="text"> 
                                <span class="hint--top hint--medium hint--rounded" aria-label="Enter your first name">
                                </span>
                            </div>
                            <div class="col-md-6 col-sm-6 j-margin-bot">
                                <input class="form-control j-form-input-one" placeholder="Last Name" name="signup_lname" id="signup_lname" type="text"> 
                                <span class="hint--top hint--medium hint--rounded" aria-label="Enter your last name">
                                </span>
                            </div>
                            <div class="col-md-6 col-sm-6 j-margin-bot">
                                <select name="signup_city" id="signup_city" class="form-control j-form-drop">
                                    <option value="" selected="selected">Select City</option>
                                    <option  data-stateid="10" value="Delhi">Delhi</option>
                                    <option  data-stateid="17" value="Bengaluru">Bengaluru</option>
                                    <option  data-stateid="21" value="Mumbai">Mumbai</option>
                                </select> 
                                <span class="hint--top hint--medium hint--rounded" aria-label="Enter city name">
                                </span>
                            </div>
                            <div class="col-md-6 col-sm-6 j-margin-bot">
                                <input placeholder="Email" name="signup_email" id="signup_email" class="form-control j-form-input-one" type="Email"> 
                                <span class="hint--top hint--medium hint--rounded" aria-label="Use real & working email, candidates will contact you">
                                </span>
                            </div>
                            <div class="col-md-12 col-sm-12 j-margin-bot">
                                <input class="form-control j-form-input-two" placeholder="Locality (Area)" name="signup_address" id="signup_address" type="text"> 
                                <span class="hint--top hint--medium hint--rounded" aria-label="Enter the area/mohalla name. For example: Patel Nagar East">
                                </span>
                            </div>
                            <div class="col-md-6 col-sm-6 j-margin-bot">
                                <input placeholder="Submit Proof Documents" disabled="disabled" class="form-control j-form-left" type="text">
                                <input class="form-control j-form-input-one mt-1" type="file" id="formFileMultiple" name="formFileMultiple" multiple>
                            </div>
                            <div class="col-md-6 col-sm-6 j-margin-bot">
                                <input placeholder="+91" disabled="disabled" class="form-control j-form-left" type="text"> 
                                <input placeholder="Mobile Number" name="signup_mobileno" id="signup_mobileno" class="form-control j-form-right landing_mobile mt-1" maxlength="10" type="text">
                            </div>
                            <div class="col-md-6 col-sm-6 j-margin-bot">
                                <input placeholder="Set Password" name="signup_password" id="signup_password" class="form-control j-form-input-one" type="password">
                            </div>
                            <div class="col-md-6 col-sm-6 j-margin-bot">
                                <input placeholder="Confirm Password" name="signup_cpassword" id="signup_cpassword" class="form-control j-form-input-one" type="password">
                            </div>
                            <div class="input-group filled" style="margin-bottom:0px;">
                                <button type="submit" class="btn button-md btn-success cat-btn load1" data-loading-text="Please wait..." type="submit"> Register</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="j-order j-new-order-main p-3">
                <ul class="policy-text">
                    <li><i class="fas fa-shield-check"></i> By posting your job, you agree to our <a href="https://www.just.jobs/legal/terms-of-use" target="_blank">T&C</a> and <a href="https://www.just.jobs/legal/privacy-policy" target="_blank">Privacy Policy</a>.</li> 
                    <li><i class="fas fa-badge-percent"></i> You'd be able to apply coupon code on the cart page.</li>
                    <li><i class="fas fa-exclamation-triangle"></i> Job post may be removed in case of an adult or illegitmate work opportunity.</li>
                    <li><i class="fas fa-times-circle"></i> Asking for money to candidates is strictly prohibited</li>
                </ul>      
            </div>
        </div>
    </section>
</body>