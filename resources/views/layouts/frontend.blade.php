<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
      
        <title>E-Lelang</title>
        <meta content="" name="description">
      
        <meta content="" name="keywords">
      
        <!-- Favicons -->
        <link href="{{asset('Frontend/img/favicon.png')}}" rel="icon">
        <link href="{{asset('Frontend/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
      
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      
        <!-- Vendor CSS Files -->
        <link href="{{asset('Frontend/vendor/aos/aos.css')}}" rel="stylesheet">
        <link href="{{asset('Frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('Frontend/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
        <link href="{{asset('Frontend/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
        <link href="{{asset('Frontend/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
        <link href="{{asset('Frontend/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">
      
        <!-- Template Main CSS File -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="{{asset('Frontend/css/style.css')}}" rel="stylesheet">
      
      </head>
      
      <body>
      
        <!-- ======= Header ======= -->
        <header id="header" class="header fixed-top">
          <div class="container-fluid container-xl d-flex align-items-center justify-content-between">
      
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="{{asset('Frontend/img/logo.png')}}" alt="">
              <span>E-Lelang</span>
            </a>
      
            <nav id="navbar" class="navbar">
              <ul>
                <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
                <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
                <li><a class="nav-link scrollto" href="#services">Services</a></li>
                <li><a class="nav-link scrollto" href="#portfolio">Portfolio</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                <li><a class="nav-link scrollto" href="{{route('frontend.login')}}">Masuk</a></li>
                <li><a class="getstarted scrollto" href="{{route('frontend.daftar')}}">Daftar</a></li>
              </ul>
              <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
      
          </div>
        </header><!-- End Header -->

        @yield('content')

  <footer id="footer" class="footer">

    {{-- <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
          </div>
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div> --}}

    <div class="footer-top">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <img src="Frontend/img/logo.png" alt="">
              <span>Sistem E-Lelang</span>
            </a>
            <p>
                Portal Pengadaan Nasional adalah pintu gerbang sistem informasi elektronik yang terkait dengan informasi Pengadaan Barang/Jasa secara nasional yang dibangun dan dikelola oleh Lembaga Kebijakan Pengadaan Barang/Jasa Pemerintah - Republik Indonesia
            </p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
              <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
            <h4>Contact Us</h4>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>E-Lelang</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="#">E-Lelang DKI Jakarta</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  @include('sweetalert::alert')
  <!-- Vendor JS Files -->
  <script src="{{asset('Frontend/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('Frontend/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('Frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('Frontend/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('Frontend/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('Frontend/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('Frontend/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('Frontend/js/main.js')}}"></script>

</body>

</html>