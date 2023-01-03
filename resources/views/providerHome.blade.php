@extends('layouts.provider')

@section('content')

    <section class="hero-section">
        <div class="container">
        <div class="row pt-4">
            <p class="text-center hero-heading">
            Hire best workers around the whole India
            </p>
            <p class="text-center hero-subheading">
            Post a job, shortlist and get worker!
            </p>
        </div>
        <div class="container mt-5 pt-5">
            <div class="row justify-content-center text-center">
            <div class="col-lg-6 col-11 mt-4 d-flex">
                <a class="training-card card" href="" target="_blank">
                <div class="row">
                    <div class="body col-6">
                    <p class="card-heading">Shortlist & Recruit Candidates<span class="lbl">Full-time</span> </p>
                    <ul class="highlights my-auto">
                        <li>
                        <!-- Life-time Access -->
                        </li>
                        <li>
                        <p class="my-0"> Best personel among society </p>
                        </li>
                        <li>
                            <p class="my-0"> Pay as you go</p>
                        </li>
                    </ul>
                    <span class="explore-now my-auto">Explore now
                        <i class="fa-solid fa-chevron-right"></i>
                    </span>
                    </div>
                    <div class="col-6 thumbnail my-auto">
                    <img src="./images/card-1.jpg" width="340">
                    </div>
                </div>
                </a>
            </div>
            <div class="col-lg-6 col-11 mt-4 d-flex">
                <a class="training-card card" href="" target="_blank">
                <div class="row">
                    <div class="body col-6">
                    <p class="card-heading">Placement Guarantee Courses</p>
                    <!-- <span class="lbl">3 -12 months</span> -->
                    <ul class="highlights my-auto">
                        <li>
                        <!-- Life-time Access -->
                        </li>
                        <li>
                        <p class="my-0">Upskill and get a</p>
                        <p class="my-0"> guaranteed placement</p>
                        </li>
                    </ul>
                    <span class="explore-now my-auto">Explore now
                        <i class="fa-solid fa-chevron-right"></i>
                    </span>
                    </div>
                    <div class="col-6 thumbnail">
                    <img src="./images/Blue-collar.jpeg" width="300">
                    </div>
                </div>
                </a>
            </div>
            </div>
        </div>
        </div>
    </section>

    <section id="job-post"class="container-fluid mt-5">
        <div class="container custom-companies mt-5">
            <div class="row px-3 mb-4 py-5" id="company_reg" style="box-shadow: 2px 2px 12px #ccc; border-radius:10px;">
                <div class="col-12 text-start mb-5">
                    <h3>Easy job posting </h3>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary one mx-3">
                        <a href="job-form" style="color: #fff; text-decoration:none;">Post a Job</a>
                    </button>
                </div>
            </div>
        </div>
    </section>

@endsection