
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pengaduan Masyarakat</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/landing/img/favicon.png" rel="icon">
  <link href="/landing/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/landing/vendor/aos/aos.css" rel="stylesheet">
  <link href="/landing/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/landing/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/landing/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/landing/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/landing/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/landing/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: BizLand - v3.10.0
  * Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <h1 class="logo"><a href="/">PE<span>MAS</span></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="/landing/img/logo.png" alt=""></a>-->

      <nav id="navbar" class="navbar">
        <ul>
            {{-- login Masyarakat --}}
          <li class="dropdown"><a class="nav-link scrollto">{{$masyarakat->nama}}</a>
            <ul>
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><strong>Logout</a></strong>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </li>

          

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->

  <main id="main" style="margin-top:100px">
    
    @yield('content')

  </main><!-- End #main -->


  {{-- <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> --}}

  <!-- Vendor JS Files -->
  <script src="/landing/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/landing/vendor/aos/aos.js"></script>
  <script src="/landing/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/landing/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/landing/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/landing/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/landing/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="/landing/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="/landing/js/main.js"></script>

</body>

</html>