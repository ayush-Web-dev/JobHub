<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>JobHub</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Kaushan Script' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href=" {{ 'css/style.css'}} ">
</head>
<body>
    <div id="app">  
        <header class="nav-bar p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-light p-0" id="main-navbar">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
                    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                    <a id="logo" class="navbar-brand px-5 mx-5" href="/">JobHub</a>

                    <ul class="navbar-nav text-uppercase ms-auto me-4">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <div class="dropdown">
                            <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Job Seeker
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="login">Login</a></li>
                                <li><a class="dropdown-item" href="signup-Jobseeker">Register</a></li>
                            </ul>
                        </div>
                        <div class="dropdown">
                            <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Employer
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="login">Login</a></li>
                                <li><a class="dropdown-item" href="signup-Employee">Register</a></li>
                            </ul>
                        </div>
                        <li class="nav-item">
                            <a class="nav-link" href="#social_media_container">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>  
        </header>

        <main class="py-4 home">
            @yield('content')
        </main>


        <footer id="footer">
            <div id="footer" class="main_footer" data-custom-attribute="footer_custom_value">
              <div class="container">
                <div class="max-width-container container-fluid">
                  <div class="footer_container row mb-lg-5">
                    <div class="footer-column col-lg-2 col-4" id="jobs_by_place">
                      <div class="footer-list">
                        <h5>Jobs by Places</h5>
                        <div class="footer-list-item">
                          <a href="/jobss">Jobs in India</a>
                        </div>
                        <div class="footer-list-item">
                          <a href="">Jobs in Delhi</a>
                        </div>
                        <div class="footer-list-item">
                          <a href="">Jobs in Bangalore</a>
                        </div>
                        <div class="footer-list-item">
                          <a href="">Jobs in Hyderabad</a>
                        </div>
                        <div class="footer-list-item">
                          <a href="">Jobs in Mumbai</a>
                        </div>
                        <div class="footer-list-item">
                          <a href="">Jobs in Chennai</a>
                        </div>
                        <div class="footer-list-item">
                          <a href="">Jobs in Gurgaon</a>
                        </div>
                        <div class="footer-list-item">
                          <a href="">Jobs in Kolkata</a>
                        </div>
                      </div>
                    </div>
                    <div class=" footer-column col-lg-2  col-4" id="jobs_by_stream">
                      <div class="footer-list">
                        <h5>Jobs by Stream</h5>
                        <div class="footer-list-item">
                          <a href="">Computer Jobs </a>
                        </div>
                        <div class="footer-list-item">
                          <a href="">Electrical Jobs </a>
                        </div>
                        <div class="footer-list-item">
                          <a href="">Mechanical Jobs</a>
                        </div>
                        <div class="footer-list-item">
                          <a href="">Waitor Jobs</a>
                        </div>
                        <div class="footer-list-item">
                          <a href="">Carpentor Jobs</a>
                        </div>
                        <div class="footer-list-item">
                          <a href="">Lab Assistant Jobs</a>
                        </div>
                        <div class="footer-list-item">
                          <a href="">Receptionist Jobs</a>
                        </div>
                      </div>
                    </div>
        
                    <div class=" footer-column col-lg-2 col-4" id="jobs_by_places">
                      <div class="footer-list">
                        <h5>Jobs by Places</h5>
                        <div class="footer-list-item">
                          <a href="" target="_blank"
                            rel="noopener">Jobs in Delhi</a>
                        </div>
                        <div class="footer-list-item">
                          <a href="" target="_blank"
                            rel="noopener">Jobs in Mumbai</a>
                        </div>
                        <div class="footer-list-item">
                          <a href="" target="_blank"
                            rel="noopener">Jobs in Bangalore</a>
                        </div>
                        <div class="footer-list-item">
                          <a href="" target="_blank"
                            rel="noopener">Jobs in Jaipur</a>
                        </div>
                        <div class="footer-list-item">
                          <a href="" target="_blank"
                            rel="noopener">Jobs in Kolkata</a>
                        </div>
                      </div>
                    </div>
        
                    <div class="footer-column col-lg-2 col-4" id="jobs_by_stream">
                      <div class="footer-list">
                        <h5>Jobs by Stream</h5>
                        <div class="footer-list-item">
                          <a href="" target="_blank"
                            rel="noopener">Mechanical & Repairing Jobs</a>
                        </div>
                        <div class="footer-list-item">
                          <a href="" target="_blank"
                            rel="noopener">Driver & Helper Jobs</a>
                        </div>
                        <div class="footer-list-item">
                          <a href="" target="_blank"
                            rel="noopener">Cleaner & Peon Jobs</a>
                        </div>
                        <div class="footer-list-item">
                          <a href="" target="_blank"
                            rel="noopener">Carpentor & Welding Jobs</a>
                        </div>
                        <div class="footer-list-item">
                          <a href="" target="_blank"
                            rel="noopener">Plumber & Painter Jobs</a>
                        </div>
                      </div>
                    </div>
        
                    <div class="footer-column col-lg-3 col-4 " id="trainings_by_stream">
                      <div class="footer-list">
                        <h5>
                          <div id="trainings-footer">
                            <a href="" target="_blank"
                              rel="noopener">Post Jobs <span class="label2">FREE</span>
                            </a>
                          </div>
                        </h5>
                        <div class="footer-list-item">
                          <a href="r"
                            target="_blank" rel="noopener">Register with us</a>
                        </div>
                        <div class="footer-list-item">
                          <a href="" target="_blank"
                            rel="noopener">Post a specific Job</a>
                        </div>
                        <div class="footer-list-item">
                          <a href=""
                            target="_blank" rel="noopener">Provide all the requirements</a>
                        </div>
                        <div class="footer-list-item">
                          <a href=""
                            target="_blank" rel="noopener">Shortlist Applied Candidates</a>
                        </div>
                        <div class="footer-list-item">
                          <a href="" target="_blank"
                            rel="noopener">Interview & Negotiate</a>
                        </div>
                        <div class="footer-list-item">
                          <a href=""
                            target="_blank" rel="noopener">Hire Most Suitable User</a>
                        </div>
                        <div class="footer-list-item">
                          <a href=""
                            target="_blank" rel="noopener">Keep in touch with us</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div id="footer-about-us-container" class="row mt-lg-5">
                    <div class="footer-column col-lg-2" id="about_left">
                      <div class="footer-list">
                        <div class="footer-list-item">
                          <a href="/about_us">About us</a>
                        </div>
                        <div class="footer-list-item">
                          <a href="/careers">We're hiring</a>
                        </div>
                        <div class="footer-list-item">
                          <a href="">Hire workers for your company</a>
                        </div>
                      </div>
                    </div>
                    <div class="footer-column col-lg-2" id="about_center">
                      <div class="footer-list">
                        <div class="footer-list-item">
                          <a href="" target="_blank">
                            Want Job
                          </a>
                        </div>
                        <div class="footer-list-item">
                          <a href="" target="_blank">Apply</a>
                        </div>
                        <div class="footer-list-item">
                          <a href="/products_services">Our Services</a>
                        </div>
                      </div>
                    </div>
                    <div class="footer-column col-lg-2" id="about_right">
                      <div class="footer-list">
                        <div class="footer-list-item">
                          <a href="/terms">Terms &amp; Conditions</a>
                        </div>
                        <div class="footer-list-item">
                          <a href="/privacy">Privacy</a>
                        </div>
                        <div class="footer-list-item">
                          <a href="/contact">Contact us</a>
                        </div>
                      </div>
                    </div>
                    <div class="apps col-lg-2">
                      <div>
                        <a href=""
                          target="_blank">
                          <div class="footer-list-item" id="android_app_container">
                            <i class="fa-brands fa-google-play"></i><span> Get Android App</span>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="apps col-lg-2">
                      <div>
                        <a href=""
                          target="_blank">
                          <div class="footer-list-item" id="ios_app_container">
                            <i class="fa-brands fa-app-store-ios"></i> <span> Get IOS App</span>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div id="footer-bottom">
                    <div class="container-fluid">
                      <div class="row">
                        <div id="social_media_container" class="col-lg-9 px-0">
                          <a class="social_media_link_footer" href=""
                            target="_blank"><i class="fa-brands fa-instagram"></i></a>
                          <a class="social_media_link_footer" href=""
                            target="_blank"><i class="fa-brands fa-square-twitter"></i></a>
                          <a class="social_media_link_footer"
                            href="" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                          <a class="social_media_link_footer"
                            href="" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a>
                        </div>
                        <div class="col-lg-3 copyright-container" id="copyright">
                         <span style="font-size: 28px; vertical-align: middle;"> &copy;</span> 
                         Copyright 2022  <span> <a style="color:#fa992a; font-size:18px; font-weight: 600;" href="\">JobHUb</a></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </footer>

    </div>

    <script>
        window.onscroll = function() {scrollFunction()};
        function scrollFunction() {
        if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
            document.getElementById("nav-bar").style.padding = "6px 10px";
            document.getElementById("logo").style.fontSize = "34px";
        } else {
            document.getElementById("nav-bar").style.padding = "10px 10px";
            document.getElementById("logo").style.fontSize = "44px";
        }
    }
    </script>
</body>

</html>
