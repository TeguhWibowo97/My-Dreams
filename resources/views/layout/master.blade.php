<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assetAdmin/css/bootstrap.css" />
    <link rel="stylesheet" href="/assetAdmin/css/flaticon.css" />
    <link rel="stylesheet" href="/assetAdmin/css/themify-icons.css" />
    <link rel="stylesheet" href="/assetAdmin/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="/assetAdmin/vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="/assetAdmin/css/style.css" />
  </head>

  <body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area white-header">
      <div class="main_menu">
        <div class="search_input" id="search_input_box">
          <div class="container">
            <form class="d-flex justify-content-between" method="" action="">
              <input
                type="text"
                class="form-control"
                id="search_input"
                placeholder="Search Here"
              />
              <button type="submit" class="btn"></button>
              <span
                class="ti-close"
                id="close_search"
                title="Close Search"
              ></span>
            </form>
          </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand" href="index.html">
              <img class="logo-2" src="/assetAdmin/img/logo2.png" alt="" />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="/dashboard">Home</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="/impian">Impian</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link search" id="search">
                    <i class="ti-search"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!--================ End Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>@yield('judul')</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================ Start About Area =================-->
    <section class="about_area section_gap">
      <div class="container">
        <div class="row">
            @yield('content')
        </div>
      </div>
    </section>
    <!--================ End About Area =================-->

    <!--================ Start footer Area  =================-->
    <footer class="footer-area section_gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4>Top Products</h4>
            <ul>
              <li><a href="#">Managed Website</a></li>
              <li><a href="#">Manage Reputation</a></li>
              <li><a href="#">Power Tools</a></li>
              <li><a href="#">Marketing Service</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 single-footer-widget">
            
          </div>
        </div>
        <div class="row footer-bottom d-flex justify-content-between">
          <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="ti-heart" aria-hidden="true"></i> by Teguh Wibowo <i class="ti-heart" aria-hidden="true"></i>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
          <div class="col-lg-4 col-sm-12 footer-social">
            <a href="#"><i class="ti-facebook"></i></a>
            <a href="#"><i class="ti-twitter"></i></a>
            <a href="#"><i class="ti-dribbble"></i></a>
            <a href="#"><i class="ti-linkedin"></i></a>
          </div>
        </div>
      </div>
    </footer>
    <!--================ End footer Area  =================-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/assetAdmin/js/jquery-3.2.1.min.js"></script>
    <script src="/assetAdmin/js/popper.js"></script>
    <script src="/assetAdmin/js/bootstrap.min.js"></script>
    <script src="/assetAdmin/vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="/assetAdmin/vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="/assetAdmin/js/owl-carousel-thumb.min.js"></script>
    <script src="/assetAdmin/js/jquery.ajaxchimp.min.js"></script>
    <script src="/assetAdmin/js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="/assetAdmin/js/gmaps.min.js"></script>
    <script src="/assetAdmin/js/theme.js"></script>

  </body>
</html>
