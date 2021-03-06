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
    <title>Impian</title>
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
            <a href="/dashboard" class="text-white">
              <img src="/assetAdmin/img/favicon.png"> MY DREAM
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
                <li class="nav-item submenu dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Status Impian</a
                  >
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="/impian/tercapai">Impian Tercapai</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/impian/belumtercapai">Belum Tercapai</a>                      
                    </li>
                  </ul>
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
                <h2>Semua Impian</h2>
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
        <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModal"> Tambah Data</button>
        <table class="table">
            <thead class="thead-dark">
                <th>#</th>
                <th>Nama Impian</th>
                <th>Harapan Tercapai</th>
                <th>Status Impian</th>
                <th>Aksi</th>
            </thead>
            <tbody>
            @foreach($impian as $impian)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $impian->nama_impian }}</td>
                    <td>{{ $impian->harapan_tercapai }}</td>
                    <td>
                      <img src="/assetAdmin/img/oke.png" width="25px">
                    </td>
                    <td>
                      <a href="/impian/edit/{{$impian->id}}">
                        <img src="/assetAdmin/img/ubah.png" width="25px">
                      </a>
                      <a href="/impian/hapus/{{$impian->id}}" onclick="javascript:return confirm('apakah yakin akan menghapus data ?')">
                        <img src="/assetAdmin/img/hapus.png" width="25px">
                      </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
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

    <!-- MODAL INPUT DATA Start -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Input Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
          <form action="/impian" method="POST">
          @csrf
              <div class="form-group">
                <label class="col-form-label">Nama Impian : </label>
                <input type="text" class="form-control" name="nama_impian">
              </div>
              <div class="form-group">
                <label class="col-form-label">Harapan Tercapai : </label>
                <input type="text" class="form-control" name="harapan_tercapai">
              </div>              
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Simpan</button>
          </div>
          </form>

        </div>
      </div>
    </div>
    <!-- MODAL INPUT DATA End-->

  </body>
</html>
