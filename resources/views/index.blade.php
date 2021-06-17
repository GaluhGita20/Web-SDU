<?php
ob_start();
    define('BASE_URL', 'https://studentday.bemudayana.id/');
  session_set_cookie_params(['samesite' => 'None', 'secure' => true]);// cokkie same set
session_start();// cokkie same set
ob_flush();
?>


<!DOCTYPE html>
  <html>

    <head>

      <!-- Basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">

      <meta name="keywords" content="Student Day 2020" />
      <meta name="description" content="Student Day 2020">
      <meta name="author" content="Studentday">

      <title><?= $page='' ?></title>
      <?php if ($page == 'Object not found!') {
        http_response_code(404);
        include('404.php'); // provide your own HTML for the error page
        die();
      } ?>
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{asset('img/logo/logo-sdu2020-fix-stroke.png')}}" type="image/x-icon" />
      <link rel="apple-touch-icon" href="{{asset('img/logo/logo-sdu2020-fix-stroke.png')}}">

      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

      <!-- Web Fonts  -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7COpen+Sans:400,700,800" rel="stylesheet" type="text/css">

      <!-- Vendor CSS -->
      <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}">
      <link rel="stylesheet" href="{{asset('vendor/animate/animate.min.css')}}">
      <link rel="stylesheet" href="{{asset('vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
      <link rel="stylesheet" href="{{asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}">
      <link rel="stylesheet" href="{{asset('vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
      <link rel="stylesheet" href="{{asset('vendor/magnific-popup/magnific-popup.min.css')}}">
      <link rel="stylesheet" href="{{asset('vendor/fullcalendar/fullcalendar.css')}}" />
      <link rel="stylesheet" href="{{asset('vendor/fullcalendar/fullcalendar.print.css')}}" media="print" />
      <link rel="stylesheet" href="{{asset('vendor/select2/css/select2.css')}}" />
      <link rel="stylesheet" href="{{asset('vendor/select2-bootstrap-theme/select2-bootstrap.css')}}" />

      
      <!-- Theme CSS -->
      <link rel="stylesheet" href="{{asset('css/theme.css')}}">
      <link rel="stylesheet" href="{{asset('css/theme-elements.css')}}">
      <link rel="stylesheet" href="{{asset('css/theme-blog.css')}}">
      <link rel="stylesheet" href="{{asset('css/theme-shop.css')}}">
      <!-- Current Page CSS -->
      <link rel="stylesheet" href="{{asset('vendor/rs-plugin/css/settings.css')}}">
      <link rel="stylesheet" href="{{asset('vendor/rs-plugin/css/layers.css')}}">
      <link rel="stylesheet" href="{{asset('vendor/rs-plugin/css/navigation.css')}}">
      <link rel="stylesheet" href="{{asset('vendor/circle-flip-slideshow/css/component.css')}}">

      <!-- Demo CSS -->
      <link rel="stylesheet" href="{{asset('css/demos/demo-landing.css')}}">

      <!-- Skin CSS -->
      <link rel="stylesheet" href="{{asset('css/skins/skin-landing.css')}}">

      <!-- Theme Custom CSS -->
      <link rel="stylesheet" href="{{asset('css/icon.css')}}">
      <link rel="stylesheet" href="{{asset('css/custom.css')}}">

      <style>
      
      .dropdown a{text-decoration: none;}
      .readmore{
        position: relative;
        display: inline-block;
        font-size: 15px;
        color: black!important;
        font-weight: bold;
        overflow: hidden;
      }

      .readmore::before {
        /* Same as before */
      position: absolute;
        content: attr(data-content); /* Prints the value of the attribute */
        top: 0;
        left: 0;
        color: #0088cc;
        text-decoration: underline;
        overflow: hidden;
        transition: width 275ms ease;
      }

      .readmore::before {
        /* Same as before */
        width: 0;
        white-space: nowrap;
      }
      .readmore:hover::before {
          width: 100%;
      }
      .title-expand{
        position: relative;
        display: inline-block;
        font-size: 2em;
        font-weight: 800;
        color: black!important;
        overflow: hidden;
      }

      .title-expand::before {
        /* Same as before */
      position: absolute;
        content: attr(data-content); /* Prints the value of the attribute */
        top: 0;
        left: 0;
        color: #0088cc;
        text-decoration: underline;
        overflow: hidden;
        transition: width 275ms ease;
      }

      .title-expand::before {
        /* Same as before */
        width: 0;
        white-space: nowrap;
      }
      .title-expand:hover::before {
          width: 100%;
      }
      .btn-collapse{
        width: 100%;
        text-align: left;
        cursor: pointer;
      }

      .fas{
        float: right;
        line-height: 4;
      }

      [data-toggle="collapse"] .fas::after {
        content: "\f106";
        float: right;
      }

      [data-toggle="collapse"].collapsed .fas::after {
        content: "\f107";
      
        float: right;
      }

      [data-toggle="collapse"].header-btn-collapse-nav .fas::after {
        display: none;
        content: "\f107";
      
        float: right;
      }

      body {


        /* Smoothly transition the background color */
        transition: background-color .5s;
      }

      .player {
        height: 95vh;
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
      }

      .details {
        display: flex;
        align-items: center;
        flex-direction: column;
        justify-content: center;
        margin-top: 25px;
      }

      .track-art {
        margin: 25px;
        height: 250px;
        width: 250px;
        background-image: url("https://images.pexels.com/photos/262034/pexels-photo-262034.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260");
        background-size: cover;
        border-radius: 15%;
        background-position: center center;
        background-repeat: no-repeat; 
      }

      .now-playing {
        font-size: 1rem;
      }

      .track-name {
        font-size: 2rem;
        padding: 20px;
        font-weight: bold;
      }

      .track-artist {
        font-size: 1.5rem;
      }

      .buttons {
        display: flex;
        flex-direction: row;
        align-items: center;
      }

      .playpause-track, .prev-track, .next-track {
        padding: 10px;
        opacity: 0.8;

        /* Smoothly transition the opacity */
        transition: opacity .2s;
      }

      .playpause-track:hover, .prev-track:hover, .next-track:hover {
        opacity: 1.0;
      }

      .slider_container {
        width: 75%;
        max-width: 400px;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      /* Modify the appearance of the slider */
      .seek_slider, .volume_slider {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        height: 5px;
        background: black;
        opacity: 0.7;
        -webkit-transition: .2s;
        transition: opacity .2s;
      }

      /* Modify the appearance of the slider thumb */
      .seek_slider::-webkit-slider-thumb, .volume_slider::-webkit-slider-thumb {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        width: 15px;
        height: 15px;
        background: white;
        cursor: pointer;
        border-radius: 50%;
      }

      .seek_slider:hover, .volume_slider:hover {
        opacity: 1.0;
      }

      .seek_slider {
        width: 60%;
      }

      .volume_slider {
        width: 30%;
      }

      .current-time, .total-duration {
        padding: 10px;
      }

      i.fa-volume-down, i.fa-volume-up {
        padding: 10px;
      }

      i.fa-play-circle, i.fa-pause-circle, i.fa-step-forward, i.fa-step-backward {
        cursor: pointer;
      }
      </style>
    </head>  
     
    <body class="loading-overlay-showing" data-loading-overlay data-plugin-options="{'hideDelay':600}">
      <!--custom loader-->
      <div class="loading-overlay float-left loading">
        <img class="img-fluid appear-animation animated flipInX appear-animation-visible" src="{{asset('img/logo/new-low.png')}}"
          alt="">
      </div>
      <div class="body">	
        <header id="header"
          class="header-transparent header-transparent-dark-bottom-border header-transparent-dark-bottom-border-1 header-effect-shrink"
          data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 90}">
          <div class="header-body border-top-0 bg-dark box-shadow-none">
            <div class="header-container container">
              <div class="header-row">
                <div class="header-column">
                  <div class="header-row">
                    <div class="header-logo">
                      <a href="" <?php echo BASE_URL; ?>>
                        <img alt="Student day"  height="100"  src="{{asset('img/logo/logo-sdu2020-fix-stroke.png')}}">
                        <!--width="220"-->
                      </a>
                    </div>
                  </div>
                </div>
                <div class="header-column justify-content-end">
                  <div class="header-row">
                    <div class="header-nav header-nav-line header-nav-light-text header-nav-dropdowns-dark header-nav-bottom-line header-nav-bottom-line-effect-1">
                      <div
                        class="header-nav-main header-nav-main-mobile-dark header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                        <nav class="collapse">
                          <ul class="nav nav-pills" id="mainNav">
                            <li class="dropdown">
                              <a class="dropdown-item {{Request::is('/')?'active':null}}" href="{{('/')}}">
                                Beranda
                              </a>
                            </li>
                            <!--<li>-->
										<!--	<li class="dropdown">
													<a class="dropdown-item dropdown-toggle <?php if ($page == "Penugasan" || $page == "Pengumpulan Penugasan SBMPTN" || $page == "Pengumpulan Penugasan Mandiri") echo "active current-page-active'"; ?>" href="#">
														Penugasan
													</a>
													<ul class="dropdown-menu">
														<li>
															<a class="dropdown-item <?php if ($page == "Penugasan") echo "active current-page-active'"; ?>" href="penugasan">
																Penugasan
															</a>
														</li>
														<!--<li>-->
														<!--	<a class="dropdown-item" href="pengumpulan_tugas">-->
														<!--		Pengumpulan Tugas-->
														<!--	</a>-->
														<!--</li>-->
													<!--	<li>
															<a class="dropdown-item" href="pengumpulan-penugasan-sbm">
																Pengumpulan Penugasan SBMPTN
															</a>
														</li>
														<li>
															<a class="dropdown-item" href="pengumpulan-penugasan-mandiri">Pengumpulan Penugasan Jalur Mandiri</a>
														</li>
													</ul>
												</li>
												<!--</li>-->
                          <li class="dropdown">
                            <a class="dropdown-item dropdown-toggle <{{Request::is('ukm')?'active':null}}" href="{{('/ukm')}}"">
															UKM
                            </a>
                            <ul class="dropdown-menu">
                              <li>
                                <a class="dropdown-item <?php if($page == "Info Ukm") echo "active current-page-active'";?>" href="info-ukm.php">
                            Info Ukm
                          </a>
                              </li>
                              <li>
                                <a class="dropdown-item {{Request::is('pendaftaranUKM')?'active':null}}" href="{{('/pendaftaranUKM')}}">
                                  Pendaftaran UKM
                                </a>
                              </li>
                              </ul>
                            </li>
                            <li class="dropdown">
                              <a class="dropdown-item {{Request::is('infoFakultas')?'active':null}}" href="{{('/infoFakultas')}}">
                                Info Fakultas
                              </a>
                            </li>
                              <li class="dropdown">
                              <a class="dropdown-item {{Request::is('p&forum')?'active':null}}" href="{{('/p&forum')}}">
                                Paguyuban & Forum Agama
                              </a>
                            </li>
                            <li class="dropdown">
                              <a class="dropdown-item {{Request::is('gallery')?'active':null}}" href="{{('/gallery')}}">
                                Gallery
                              </a>
                            </li>
                            <li class="dropdown">
                              <a class="dropdown-item {{Request::is('contact')?'active':null}}" href="{{('/contact')}}">
                                Contact
                              </a>
                            </li>
                          </ul>
                        </nav>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>
      </div>

      @yield('content')

        

      
      <footer id="footer" class="bg-color-dark-scale-2 border border-right-0 border-left-0 border-bottom-0 border-color-light-3 mt-0">
        <div class="container-fluid py-4">
          <div class="row justify-content-md-center py-5 mt-3">
            <div class="col-md-12 col-lg-3  align-items-center  mb-5 mb-lg-0 text-center">
              <a href="index.html"><img src="img/logo/logo-sdu2020-fix-stroke.png" alt="Logo" class="img-fluid" style="max-width: 270px;text-align: center;"></a>
            </div>
            <div class="col-md-12 col-lg-2 text-center text-lg-left mb-5 mb-lg-0">
              <h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Sekretariat</h5>
              <ul class="list list-unstyled">
                <li class="mb-1">
                  <p>Panitia Student Day Universitas Udayana 2021</p>
                </li>
                <li class="mb-1">
                  <p>Direktorat Universitas Udayana <br><a href="https://goo.gl/maps/JghfBQnRHVA33pCm7" target="blank"><b class="text-primary">Jl. Kampus Bukit Jimbaran</b></a>
                  </p>
                </li>
              </ul>
            </div>
            <div class="col-md-12 col-lg-4 text-center text-lg-left mb-5 mb-lg-0 ">
              <h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Alamat</h5>
              <div class="row">
                <div class="col-md-12 col-lg-6">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.211123039704!2d115.21811441478401!3d-8.671462093769389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240eceb8d85e1%3A0x5708aacaf2361044!2sStudent%20Center%20Universitas%20Udayana!5e0!3m2!1sid!2sid!4v1597841723025!5m2!1sid!2sid" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col-md-12 col-lg-6">
                  <p class="p-2">Student Center Universitas Udayana <br>Jl. DR. Goris No.10, Dangin Puri Klod, Kec.
                    Denpasar Tim., Kota Denpasar, Bali 80234</p>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-3 text-center text-lg-left">
              <h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Akun Resmi</h5>
      
              <p class="mt-3 mb-0 text-center text-lg-left">
                <i class="fab fa-instagram text-color-primary"></i>
                <a href="https://www.instagram.com/ksatriamudaudayana/" target="blank">
                  <span class="text-color-light opacity-7 pl-2">ksatriamudaudayana</span>
                </a><br>
                <i class="fa fa-globe text-color-primary"></i>
                <a href="https://bemudayana.id/" target="blank">
                  <span class="text-color-light opacity-7 pl-2">bemudayana.id</span>
                </a><br>
                <i class="fa fa-envelope text-color-primary"></i>
                <a href="mailto:studentday2020@bemudayana.id?
                      subject=MessageTitle&amp;
                      body=Message Content">
                  <span class="text-color-light opacity-7 pl-2">studentday2021@bemudayana.id</span>
                </a>
              </p>
            </div>
          </div>
        </div>
        <div class="footer-copyright footer-copyright-style-2 background-transparent footer-top-light-border">
          <div class="container py-2">
            <div class="row py-4">
              <div class="col d-flex align-items-center justify-content-center mb-4 mb-lg-0">
                <p>© Copyright 2021. 3D Student Day 2021 Universitas Udayana.</p>
              </div>
            </div>
          </div>
        </div>
        </div>
      </footer>
    </body>

    

      <!-- Head Libs -->
      <script src="{{asset('vendor/modernizr/modernizr.min.js')}}"></script>
      <!-- Vendor -->
      <script src="{{asset('admin/bower_components/jquery/dist/jquery.min.js')}}"></script>
      <script src="{{asset('vendor/jquery.appear/jquery.appear.min.js')}}"></script>
      <script src="{{asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
      <script src="{{asset('vendor/jquery.cookie/jquery.cookie.min.js')}}"></script>
      <script src="{{asset('vendor/popper/umd/popper.min.js')}}"></script>
      <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
      <script src="{{asset('vendor/common/common.min.js')}}"></script>
      <script src="{{asset('vendor/jquery.validation/jquery.validate.min.js')}}"></script>
      <!--<script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>-->
      <!--<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>-->
      <script src="{{asset('vendor/jquery.lazyload/jquery.lazyload.min.js')}}"></script>
      <!--<script src="vendor/isotope/jquery.isotope.min.js"></script>-->
      <script src="{{asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
      <script src="{{asset('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
      <!--<script src="vendor/vide/jquery.vide.min.js"></script>-->
      <!--<script src="vendor/vivus/vivus.min.js"></script>-->
      <!--<script src="vendor/jquery.countdown/jquery.countdown.min.js"></script>-->

      <script src="{{asset('admin/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
      <script src="{{asset('vendor/bootstrap-tagsinput/bootstrap-tagsinput.js')}}"></script>


      <!-- Theme Base, Components and Settings -->
      <script src="{{asset('js/theme.admin.extension.js')}}"></script>
      <script src="{{asset('js/theme.js')}}"></script>

      <!-- Current Page Vendor and Views -->
      <script src="{{asset('vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
      <script src="{{asset('vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

      <script src="{{asset('js/custom.js')}}"></script>
        <!-- Load the main script for the player -->
        <script src="{{asset('js/main.js')}}"></script>

      <!-- Theme Initialization Files -->
      <script src="{{asset('js/theme.init.js')}}"></script>

      <!-- Examples -->
      <script src="{{asset('vendor/moment/moment.js')}}"></script>
      <script src="{{asset('vendor/fullcalendar/fullcalendar.js')}}"></script>
  </html>
