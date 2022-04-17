<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hotel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="{{URL::asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/animate.css')}}">

    <link rel="stylesheet" href="{{URL::asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{URL::asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{URL::asset('css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{URL::asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{URL::asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
</head>

<body>

    <nav  class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="{{route('main.index')}}">hotel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li>
                        @auth
                        <a href="{{route('main.profile.index')}}">
                            <img src="{{ asset('images/'. Auth::user()->image) }}"
                            width="30px" style=" cursor:pointer;border-radius: 50%; margin:0 20px 0;">                             
                        </a>
                        @endauth
                    </li>
                </ul>

                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login/Register</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown  mr-sm-2">
                               
                                
                                    <a  href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                                    </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>

                    @if(Auth::user()->role == "admin") 
                        <li class="nav-item dropdown  mr-sm-2" style="list-style: none">
                            <a href="{{route('manage.index')}}" class="btn btn-danger ml-3 btn-sm"  >Admin</a>
                        </li>
                    @endif

                    @endguest
                </ul>


            </div>
        </div>
    </nav>
    <!-- END nav -->

    <div class="hero-wrap" style="background-image: url('{{URL::asset('assets/bg_2.jpg')}}');">
        <div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text d-flex align-itemd-end justify-content-center">
            <div class="col-md-9 ftco-animate text-center d-flex align-items-end justify-content-center">
            </div>
          </div>
        </div>
      </div>

 

    @yield('content')


    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made  by ......
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>


    <script src="{{URL::asset('js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{URL::asset('js/popper.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.easing.1.3.js')}}"></script>
    <script src="{{URL::asset('js/jquery.waypoints.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.stellar.min.js')}}"></script>
    <script src="{{URL::asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{URL::asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{URL::asset('js/aos.js')}}"></script>
    <script src="{{URL::asset('js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap-datepicker.js')}}"></script>
    <script src="{{URL::asset('js/jquery.timepicker.min.js')}}"></script>
    <script src="{{URL::asset('js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="{{URL::asset('js/google-map.js')}}"></script>
    <script src="{{URL::asset('js/main.js')}}"></script>

</body>
