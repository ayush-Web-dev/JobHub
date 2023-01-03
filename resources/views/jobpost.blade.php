@extends('layouts.provider')   


@section('content')

        <div class="container mt-5 pt-4">
            <div class="jp-plan-main p-5" style="box-shadow: 2px 2px 12px #ccc;">
                <h4 class="pt-4">Enter job details</h4>
                <hr>
                <form action="add-job" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 col-sm-6 j-margin-bot">
                            <input placeholder="Job Title" id="job_title" name="job_title" class="form-control j-form-input" type="text"> 
                            <span class="hint--top hint--medium hint--rounded" aria-label="Enter a suitable job title. Example - Babysitter required for 2 years old child">
                                <i class="fas fa-question-circle mx-3 mb-3" aria-hidden="true" title="Enter a suitable job title. Example - Babysitter required for 2 years old child"></i>
                            </span>
                        </div>

                        <div class="col-md-6 col-sm-6 j-margin-bot jj_cat_desc">
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
                            <span class="hint--top hint--medium hint--rounded" aria-label="Please select category">
                                <i class="fas fa-question-circle mx-3 mb-3" aria-hidden="true" title="Please select category"></i>
                            </span>
                        </div>

                        <div class="col-md-6 col-sm-6 j-margin-bot">
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
                            <span class="hint--top hint--medium hint--rounded" aria-label="Select estimated salary range you can afford">
                                <i class="fas fa-question-circle mx-3 mb-3" aria-hidden="true" title="Select estimated salary range you can afford"></i>
                            </span>
                        </div>

                        <div class="col-md-6 col-sm-6 j-margin-bot">
                            <select name="job_type" id="job_type" class="form-control j-form-drop">
                                <option value="">Select Job Type</option>
                                <option value="Contract" >Contract</option>
                                <option value="Freelance" >Freelance</option>
                                <option value="Full-time" >Full Time</option>
                                <option value="Internship" >Internship</option>
                                <option value="Part-time" >Part Time</option>
                                <option value="Temporary" >Temporary</option>
                            </select> 
                            <span class="hint--top hint--medium hint--rounded" aria-label="Please select job type">
                                <i class="fas fa-question-circle mx-3 mb-3" aria-hidden="true" title="Please select job type"></i>
                            </span>
                        </div>
                        
                        <div class="col-md-6 col-sm-6 j-margin-bot">
                            <select name="job_experience" id="job_experience" class="form-control j-form-drop">
                                <option value="">Experience Level</option>
                                <option value="doesnt-matter">Does not Matter </option>
                                <option value="Fresher" >Fresher (Unskilled) </option>
                                <option value="Skilled" >2 - 5 Years (Skilled) </option>
                                <option value="Experienced" >6 - 9 Years (Experienced) </option>
                                <option value="Expert" >10 - 14 Years (Expert) </option>
                                <option value="Veteran" >15+ Years (Veteran) </option>
                            </select> <span class="hint--top hint--medium hint--rounded" aria-label="Select an expected experience level">
                                <i class="fas fa-question-circle mx-3 mb-3" aria-hidden="true" title="Select an expected experience level"></i>
                            </span>
                        </div>

                        <div class="col-md-6 col-sm-6 j-margin-bot">
                            <select name="job_vacancy" id="job_vacancy" class="form-control j-form-drop">
                                <option value="">No. of Vacancies</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>
                            <span class="hint--top hint--medium hint--rounded" aria-label="Enter number of job vacancies">
                                <i class="fas fa-question-circle mx-3 mb-3" aria-hidden="true" title="Enter number of job vacancies"></i>
                            </span>
                        </div>

                        <div class="col-md-6 col-sm-6 j-margin-bot"  style=" display: none;">
                            <select name="job_timing" id="job_timing" class="form-control j-form-drop">
                                <option value="">Preferred Timings</option>
                                <option value="accommodation" data-termid="139" >Accommodation</option>
                                <option value="afternoons" data-termid="136" >Afternoons</option>
                                <option value="mornings" data-termid="135" >Mornings</option>
                                <option value="night-shift" data-termid="138" >Night Shift</option>
                                <option value="regular-day-shift" data-termid="137"  selected="selected" >Regular Day Shift</option>
                            </select> 
                            <span class="hint--top hint--medium hint--rounded" aria-label="Choose a best suitable timings for your job">
                                <i class="fas fa-question-circle mx-3 mb-3" aria-hidden="true" title="Choose a best suitable timings for your job"></i>
                            </span>
                        </div>

                        <div class="col-md-6 col-sm-6 j-margin-bot" style=" display: none;">
                            <select name="default_langauge" id="default_langauge" class="form-control j-form-drop">
                                <option value="" selected="selected">First Language</option>
                                <option value="<p>Hindi" ><p>Hindi</option>
                                <option value="English</p>" >English</p></option>
                            </select> 
                            <span class="hint--top hint--medium hint--rounded" aria-label="Select Default Language">
                                <i class="fas fa-question-circle mx-3 mb-3" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="col-md-6 col-sm-6 j-margin-bot" style=" display: none;">
                            <select name="favorite_lang" id="favorite_lang" class="form-control j-form-drop">
                                <option value="">Second Language</option>
                                <option value="<p>Assamese" ><p>Assamese</option>
                                <option value="Bengali" >Bengali</option>
                                <option value="Bodo" >Bodo</option>
                                <option value="Dogri" >Dogri</option>
                                <option value="Gujarati" >Gujarati</option>
                                <option value="Kannada" >Kannada</option>
                                <option value="Kashmiri" >Kashmiri</option>
                                <option value="Konkani" >Konkani</option>
                                <option value="Maithili" >Maithili</option>
                                <option value="Malayalam" >Malayalam</option>
                                <option value="Manipuri" >Manipuri</option>
                                <option value="Marathi" >Marathi</option>
                                <option value="Nepali" >Nepali</option>
                                <option value="Odia" >Odia</option>
                                <option value="Punjabi" >Punjabi</option>
                                <option value="Sanskrit" >Sanskrit</option>
                                <option value="Santali" >Santali</option>
                                <option value="Sindhi" >Sindhi</option>
                                <option value="Tamil" >Tamil</option>
                                <option value="Telugu" >Telugu</option>
                                <option value="Urdu</p>" >Urdu</p></option>
                            </select> 
                            <span class="hint--top hint--medium hint--rounded" aria-label="You can select up to 2 preferred languages">
                                <i class="fas fa-question-circle mx-3 mb-3" aria-hidden="true" title="You can select up to 2 preferred languages"></i>
                            </span>
                        </div>
                    
                    
                        <div class="col-md-12 col-sm-12 j-margin-bot">
                            <textarea rows="4" class="form-control change-textarea" spellcheck="true" cols="" name="job_description" id="job_description" placeholder="Job Description"></textarea>
                        </div>

                        <div class="col-md-12 col-sm-12 j-margin-bot mt-2">
                            <p><span id="curr-count-job_description">0</span>/<span id="max-job_description">750</span> - Keep it under 750 <b>characters please</b> <em><a href="#" data-toggle="modal" data-target="#myModal-individual"><b>Suggested</b> job descriptions</a></em>
                            </p>
                        </div>

                        <div class="input-group filled" style="margin-bottom:0px;">
                            <button type="submit" class="btn button-md btn-success cat-btn load1" data-loading-text="Please wait..." type="submit"> Register Job </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

@endsection