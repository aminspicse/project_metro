<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('fontend/assets/css/bootstrap.min.css')}}">
        <!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="{{asset('fontend/assets/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('fontend/assets/css/owl.theme.default.min.css')}}">
        <!-- Icofont -->
        <link rel="stylesheet" href="{{asset('fontend/assets/css/icofont.min.css')}}">

 
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{asset('fontend/assets/css/style.css')}}">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{asset('fontend/assets/css/responsive.css')}}">

        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>

    <body>
      <section class="navtop">
        <div class="container">
          <div class="row top-bar">
            <div class="col text-left">
              <span class="text">
                <a href=""><i class="icofont-facebook"></i></a>
              </span>
              <span class="text">
                <a href=""><i class="icofont-youtube-play"></i></a>
              </span>
              <span class="text">
                <a href=""><i class="icofont-phone-circle"></i>  017777777</a>
              </span>
            </div>

          <div class="col text-right">
            <span class="text">
              <a href="{{ route('login') }}"><i class="icofont-login"></i>  Login</a>
            </span>
            <span class="text">
              |
            </span>
            <span class="text">
              <a href="{{ route('register') }}"><i class="icofont-bullet"></i>  Register</a>
            </span>

            <span class="text">
              <a href="{{ asset('result') }}"><i class="icofont-bullet"></i>  Check Result</a>
            </span>

          </div>  
          </div>
        </div>
      </section>

      <!--Start Navigation Bar-->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
        <a class="navbar-brand" href="{{asset('')}}"><img src="{{asset('fontend/assets/img/School.png')}}"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
           
            <li class="nav-item">
              <a class="nav-link" href=" ">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Academic</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Admission</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Students</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Facilities</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Results</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contract</a>
            </li>
            
          </ul>
        </div>
      </div>
      </nav>
      <!--End Navigation Bar-->
      @yield("content")
 <!-- Footer area -->
 <footer class="footer-area ptb-100">
  <div class="container">
      <h2>Contract</h2>

      <ul class="contact-info">
          <li>
              <i class="icofont-phone"></i> 
              Hotline +88210202
          </li>
          <li>
              <i class="icofont-email"></i>
              schoolef@gmail.com
          </li>
          <li>
              <i class="icofont-location-pin"></i>
              google maps  goes here.
          </li>
      </ul>

      <ul class="socials-links">
          <li>
              <a href="#"><i class="icofont-facebook"></i></a>
          </li>
          <li>
              <a href="#"><i class="icofont-twitter"></i></a>
          </li>
          <li>
              <a href="#"><i class="icofont-linkedin"></i></a>
          </li>
          <li>
              <a href="#"><i class="icofont-github"></i></a>
          </li>
      </ul>

      <p>Copyright © 2020 EF school, All Rights Reserved.</p>
  </div>
</footer>
<!-- End Footer area -->


        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
         <!-- jQuery first, then Popper.js, then Bootstrap JS -->
         <script src="{{asset('fontend/assets/js/jquery-3.4.1.min.js')}}"></script>
         <script src="{{asset('fontend/assets/js/popper.min.js')}}"></script>
         <script src="{{asset('fontend/assets/js/bootstrap.min.js')}}"></script>
         <script src="{{asset('fontend/assets/js/owl.carousel.min.js')}}"></script>
         <script src="{{asset('fontend/assets/js/waypoints.min.js')}}"></script>
         <script src="{{asset('fontend/assets/js/jquery.counterup.min.js')}}"></script>
         <script src="{{asset('fontend/assets/js/jquery.mixitup.min.js')}}"></script>
         <script src="{{asset('fontend/assets/js/wow.min.js')}}"></script>
         <script src="{{asset('fontend/assets/js/custom.js')}}"></script>
    </body>
</html>