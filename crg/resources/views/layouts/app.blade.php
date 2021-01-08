<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CAREGIVER MANAGEMENT SYSTEM</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/venobox/venobox.css') }}" rel="stylesheet">  
  <link href="{{ asset('/aos/aos.css') }}" rel="stylesheet">  
  <link href="{{ asset('/boxicons/css/boxicons.min.css') }}" rel="stylesheet">  





 <!--<link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
   -->



  <!-- Template Main CSS File -->
  <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="d-flex align-items-center">
        <i class="icofont-clock-time"></i> Saturday-Thursday, 8AM to 10PM
      </div>
      <div class="d-flex align-items-center">
        <i class="icofont-phone"></i> Call us now +88 0197733446700
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt=""></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo mr-auto"><a href="index.html">Medicio</a></h1> -->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{{ url('/home') }}">Home</a></li>

          <!--<li><a href="{{ url('/home') }}">Home</a></li>-->
          <li><a href="{{ url('/about') }}">About</a></li>
          <li><a href="{{ url('/services') }}">Services</a></li>



          <!-- <li><a href="{{ url('/tryquery') }}">tryquery</a></li> -->


          <!--<li><a href="#departments">Departments</a></li>
              <li><a href="{{ url('/wh') }}">wh</a></li>
          <li><a href="#doctors">Doctors</a></li> -->
          <!-- <li class="drop-down"><a href="">Drop Down</a>
          <ul>
            <li><a href="#">Drop Down 1</a></li>
             #######<li><a href="{{ url('/wh') }}">Service category</a></li>
              -->

          
            @if(Auth::check())
          
         



            <li class="drop-down"><a href="">Service Category</a>
              <ul>
                <li><a href="{{ url('/homecaresol') }}">Find Caregiver</a></li>
                <li><a href="{{ url('/crgjob') }}">Apply for job</a></li>
               
              </ul>
            </li>


             @endif
            <!--
            <li><a href="#">Drop Down 2</a></li>
            <li><a href="#">Drop Down 3</a></li>
            <li><a href="#">Drop Down 4</a></li>
             <li><a href="#">Deep Drop Down 3</a></li>
                <li><a href="#">Deep Drop Down 4</a></li>
                <li><a href="#">Deep Drop Down 5</a></li>


          </ul>
        </li> -->
          <li><a href="{{ url('/contact') }}">Contact</a></li>


          @if(Auth::check())
          <li><a href="{{ url('/carg') }}">Admin</a></li>
          @endif


         <!-- <li><a href="{{ url('/carg') }}">Carg</a></li> -->
           

         
        

        </ul>
      </nav><!-- .nav-menu -->
       
     <!-- $$$$444 <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span> Appointment</a> $$$$$$$-->




          @if(Auth::check())
           
              <a class="appointment-btn" href="{{ url('/logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                <span class="glyphicon glyphicon-user"></span> Log Out
              </a>
            
            <a class="appointment-btn" href="#"><span class="glyphicon glyphicon-user">  </span> {{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
            </form>
          @else
             <a class="appointment-btn" href="{{ url('/login') }}"><span class="glyphicon glyphicon-user"></span> Log In</a>
            <a class="appointment-btn" href="{{ url('/register') }}"><span class="glyphicon glyphicon-user"></span> Register</a>           
          @endif
        



      <!--<a href="{{ url('/login') }}" class="appointment-btn">Log In</a>

      <a href="{{ url('/register') }}" class="appointment-btn">Sign In</a> -->

  


    </div>
  </header><!-- End Header -->
  

<br>
<br>
<br>
<br>




<!-- Page Content -->
<section class="innerpage">
<div class="container">
  
  @yield('content')
  
</div>
</section>      
<!-- /.container -->








<!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>CRG</h3>
              <p>
               United City, Madani Ave<br>
               Dhaka 1212<br><br>
                <strong>Phone:</strong> +88 0197733446700<br>
                <strong>Email:</strong> crgc5@gamil.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">In-Home Personal Care</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Support Programs</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Respite Care</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Training Support </a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Care management</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Subscribe to newsletter for receiving updates</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>CRMed</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medicio-free-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->



  <!-- Vendor JS Files -->
  <script src="{{ asset('/js/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('/aos/aos.js') }}"></script>
  



<!--
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
-->

  <!-- Template Main JS File -->
  <script src="{{ asset('/js/main.js') }}"> </script>

</body>

</html>