@extends('layouts.seeker')

@section('content')


<section id="kickstart-section" class="sub-footer-container track">
    <div class="container">
        <div class="heading-container row">
          <div class="col-6">
            <p class="heading">
              Kickstart your career with JobHub
            </p>
          </div>
          <div class="col-6">
            <div class="sub-heading">
            We'll help you with your search for jobs, guide you and help you get a best suitable job. Join a network of 6K+ learners and 
            <span class="hash-tag">#KaroShuruaatYahinSe.</span>
          </div>
        </div>
        </div>
        <div class="btns-container">
            <a class="fst" data-scroll_to="#"> Technical Jobs </a>
            <a class="snd" data-scroll_to="#"> Practical Jobs </a>
        </div>
    </div>
  </section>

    <section class="container-fluid mb-5 pb-5">
        <div class="row">
            <div class="col-12 px-5 py-4">
                <h1 >Available Companies</h1>
            </div>
        </div>
        <div class="container custom-companies mt-5">
            <div class="row">
                    @foreach ($companies as $item)
                    <div class="card px-0 mt-3">
                            <div class="card-header p-3">
                                <div class="row">
                                    <div class="col-6">
                                        <h5>{{$item['signup_compname']}}</h5>
                                    </div>
                                    <div class="col-6">
                                        <i class="fa-solid fa-envelope me-2" style="color: blue"></i>
                                        <a href="mailto:{{$item['signup_email']}}" style="text-decoration-line: underline; color:blue; font-size:18px; float:inline-end;">{{$item['signup_email']}} </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row card-text">
                                    <div class="col-6">
                                        {{-- <i class="fa-solid fa-indian-rupee-sign"></i> --}}
                                        <span style="font-size: 19px;">+91 - {{$item['signup_mobileno']}} </span>
                                        {{-- <img src="https://cdn-icons-png.flaticon.com/512/5776/5776621.png" alt="" width="50"> --}}
                                    </div>
                                    <div class="col-6">
                                        <i class="fa-solid fa-location-dot mt-2" style="font-size: 22px;"></i>
                                        <span style="color: blue; font-size:19px;"> {{$item['signup_city']}}</span>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-10">
                                        <a href="#" class="btn btn-success"  style="font-size: 20px;">Posted Jobs</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>  
        </div>

        <div class="row mt-4">
            <div class="col-12 bg-secondary px-5 py-4">
                <h1 style="color: aliceblue;">Available Jobs</h1>
            </div>
        </div>
        <div class="container custom-companies mt-5">
            <div class="row">
                    @foreach ($jobs as $job)
                    <div class="card mt-3 px-0">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-6">
                                        <h4> {{$job['job_title']}}</h4>
                                    </div>
                                    <div class="col-6">
                                        <a href="" style="text-decoration-line: none; color:black; font-size:22px; float:inline-end;">{{$job['job_type']}}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row card-text">
                                    <div class="col-6">
                                        {{-- <i class="fa-solid fa-indian-rupee-sign"></i> --}}
                                        <span style="font-size: 21px;">{{$job['job_salary']}} </span>
                                        <img src="https://cdn-icons-png.flaticon.com/512/5776/5776621.png" alt="" width="50">
                                    </div>
                                    <div class="col-4">
                                        {{-- <i class="fa-solid fa-location-dot mt-2" style="font-size: 22px;"></i> --}}
                                        <span style="color: blue; font-size:20px;">Experience: {{$job['job_experience']}}</span>
                                    </div>
                                    <div class="col-2">
                                        <span style="color: black; font-size:20px;">Vacancy: {{$job['job_vacancy']}}</span>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-10">
                                        <a href="applied" class="btn btn-success"  style="font-size: 20px;">Apply</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
            </div>  
        </div>
    </section>
@endsection