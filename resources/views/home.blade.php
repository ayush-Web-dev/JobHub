@extends('layouts.app')

@section('content')

    <section class="container-fluid"> 
        <div class="container">

            <div class="row mt-5 pt-4">
                <div class="col-6">

                </div>
                <div class="ms-5 col-3 pt-5">
                    <h2>Got a job? We got you 
                        Covered here</h2>
                </div>
                <div class="col-2 ms-1 mt-5" style="z-index:1000000;">
                    <a class="btn home-register-btn" style=
                        "background: #93c4ef;
                        border-radius: 8px;
                        padding:10px;"
                        href="login"
                        >
                        Just Register with us
                </a>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-6">
                    <img src="{{ url('images/image 169.png') }}" alt="image" width="600">
                </div>
                <div class="col-5" style="margin: 4rem 0 4rem 2rem; box-shadow: 2px 2px 12px #ccc; padding:2rem 0 0 4rem">
                    <div class="row">
                        <div class="col-11">
                            <h2 style="font-weight: 700;">Find Jobs waiting for you with just one click.</h2>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-9 text-center">
                            <h5 style="color: rgb(159, 158, 158);"> <span style="color: blue; font-size: 24px;"> JobHub - </span> <em>Easy Job Apply process with complete Authentication. </em></h5>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="row">
                <div class="col-12 mt-3">
                    <div class="card mb-4" style="box-shadow: 2px 2px 12px #ccd;">
                        <div class="card-header p-3">
                            <div class="row">
                                <div class="col-9">
                                    <h5>Aspiring Electricals</h5>
                                </div>
                                <div class="col-3">
                                    <a href="" style="text-decoration-line: underline; color:blue; font-size:18px; float:inline-end;">aspiringelectricals@gmail.com </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Electrician</h4>
                            <p class="card-text">We need Electricians. Freshers may apply.</p>
                            <div class="row">
                                <div class="col-5">
                                    <i class="fa-solid fa-indian-rupee-sign"></i>
                                    <span class="font-size:18px;"> 15,000 </span>
                                    <img src="https://cdn-icons-png.flaticon.com/512/5776/5776621.png" alt="" width="50">
                                </div>
                                <div class="col-7">
                                    <i class="fa-solid fa-location-dot mt-2" style="font-size: 24px;"></i>
                                    <span style="color: blue; font-size:20px;"> Kharar, Chandigarh</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <a href="login" class="btn btn-success"  style="font-size: 20px;">Easy Apply</a>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4" style="box-shadow: 2px 2px 12px #ccd;">
                        <div class="card-header p-3">
                            <div class="row">
                                <div class="col-9">
                                    <h5>Auto Tourist Taxi</h5>
                                </div>
                                <div class="col-3">
                                    <a href="" style="text-decoration-line: underline; color:blue; font-size:18px; float:inline-end;">touristaxi@gmail.com </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Driver</h4>
                            <p class="card-text">We need drivers. Freshers may apply with original documents.</p>
                            <div class="row">
                                <div class="col-5">
                                    <i class="fa-solid fa-indian-rupee-sign"></i>
                                    <span class="font-size:18px;"> 25,000 </span>
                                    <img src="https://cdn-icons-png.flaticon.com/512/5776/5776621.png" alt="" width="50">
                                </div>
                                <div class="col-7">
                                    <i class="fa-solid fa-location-dot mt-2" style="font-size: 24px;"></i>
                                    <span style="color: blue; font-size:20px;"> Shimla, Himachal Pradesh</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <a href="login" class="btn btn-success"  style="font-size: 20px;">Easy Apply</a>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4" style="box-shadow: 2px 2px 12px #ccd;">
                        <div class="card-header p-3">
                            <div class="row">
                                <div class="col-9">
                                    <h5>Mistri Hardwares</h5>
                                </div>
                                <div class="col-3">
                                    <a href="" style="text-decoration-line: underline; color:blue; font-size:18px; float:inline-end;">hamirpurmistri@gmail.com </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Carpenter</h4>
                            <p class="card-text">We need carpenters. Apply before 12 December 2023.</p>
                            <div class="row">
                                <div class="col-5">
                                    <i class="fa-solid fa-indian-rupee-sign"></i>
                                    <span class="font-size:18px;"> 20000 </span>
                                    <img src="https://cdn-icons-png.flaticon.com/512/5776/5776621.png" alt="" width="50">
                                </div>
                                <div class="col-7">
                                    <i class="fa-solid fa-location-dot mt-2" style="font-size: 24px;"></i>
                                    <span style="color: blue; font-size:20px;"> Hamirpur, Himachal Pradesh</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <a href="login" class="btn btn-success"  style="font-size: 20px;">Easy Apply</a>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4" style="box-shadow: 2px 2px 12px #ccd;">
                        <div class="card-header p-3">
                            <div class="row">
                                <div class="col-9">
                                    <h5>Apna CBSE School</h5>
                                </div>
                                <div class="col-3">
                                    <a href="" style="text-decoration-line: underline; color:blue; font-size:18px; float:inline-end;">apnaschool@gmail.com </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Peon</h4>
                            <p class="card-text">We need Peons. Anyone can apply. Untill 01 January 2023</p>
                            <div class="row">
                                <div class="col-5">
                                    <i class="fa-solid fa-indian-rupee-sign"></i>
                                    <span class="font-size:18px;"> 18,000 </span>
                                    <img src="https://cdn-icons-png.flaticon.com/512/5776/5776621.png" alt="" width="50">
                                </div>
                                <div class="col-7">
                                    <i class="fa-solid fa-location-dot mt-2" style="font-size: 24px;"></i>
                                    <span style="color: blue; font-size:20px;"> Hari Nagar, Delhi</span>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <a href="login" class="btn btn-success"  style="font-size: 20px;">Easy Apply</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="text-center" style="font-size: 20px;">
                           <a href="#" style="text-decoration-line: none;">many more....</a>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    </section>
@endsection
