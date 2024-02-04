
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./template/images/favicon.png">
    <!-- Pignose Calender -->
    <link href="./template/plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="./template/plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="./template/plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
    <!-- Custom Stylesheet -->
    <link href="./template/css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html">
                    <b class="logo-abbr"><img src="./template/images/logo.png" alt=""> </b>
                    <span class="logo-compact"><img src="./template/images/logo-compact.png" alt=""></span>
                    <span class="brand-title">
                        <img src="./templateimages/logo-text.png" alt="">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                
                <div class="header-right">
                    <ul class="clearfix">
                        
                        
                        
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li>
                                            <a href="./template/app-profile.html"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li>
                                
                                        
                                        <hr class="my-2">
                            
                                        <li><a href="page-login.html"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Dashboard</li>
                    <li><a href="{{ route('index') }}" aria-expanded="false">Dashboard</a></li>
                    
                  
                   
                  
    
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class=""></i><span class="nav-text">Master</span>
                        </a>
                        <ul aria-expanded="false">
                      
                     
                            <li><a href="{{ route('data-siswa') }}" aria-expanded="false">Data Siswa</a></li>
                            <li><a href="{{ route('data-guru') }}" aria-expanded="false">Data Guru</a></li>
                            <li><a href="{{ route('data-teknisi') }}" aria-expanded="false">Data Teknisi</a></li>
                            <li><a href="{{ route('data-kelas') }}" aria-expanded="false">Data Kelas</a></li>
                            <li><a href="{{ route('data-matpel') }}" aria-expanded="false">Data Mata Pelajaran</a></li>
                            <li><a href="{{ route('data-ruang') }}" aria-expanded="false">Data Ruang</a></li>
                            <li><a href="{{ route('data-barang') }}" aria-expanded="false">Data Barang</a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class=""></i><span class="nav-text">Kurikulum</span>
                        </a>
                        <ul aria-expanded="false">
                      
                            <li><a href="{{ route('data-jadwal') }}" aria-expanded="false">Jadwal Pelajaran</a></li>
                            <li><a href="{{ route('data-kalender') }}" aria-expanded="false">Kalender Akademik</a></li>
                            
                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class=""></i><span class="nav-text">Kesiswaan</span>
                        </a>
                        <ul aria-expanded="false">
                      
                            <li><a href="{{ route('data-presensi') }}" aria-expanded="false">Presensi Admin</a></li>
                            <li><a href="{{ route('data-nilai') }}" aria-expanded="false">Nilai Moodle</a></li>
                        </ul>
                    </li>

                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class=""></i><span class="nav-text">Sarpras</span>
                        </a>
                        <ul aria-expanded="false">
                      
                            <li><a href="{{ route('data-inventaris') }}" aria-expanded="false">Inventaris</a></li>
                            <li><a href="{{ route('data-ruangg') }}" aria-expanded="false">Peminjaman Ruang</a></li>
                            <li><a href="{{ route('data-barangg') }}" aria-expanded="false">Peminjaman Barang</a></li>
                        </ul>
                    </li>
                    
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class=""></i><span class="nav-text">Humas</span>
                        </a>
                        <ul aria-expanded="false">
                      
                            <li><a href="{{ route('data-tamu') }}" aria-expanded="false">Tamu</a></li>
                            <li><a href="{{ route('data-mou') }}" aria-expanded="false">Kerja Sama (MoU)</a></li>
                        </ul>
                    </li>

                    <li><a href="{{ route('data-elearning') }}" aria-expanded="false">Elearning</a></li>

                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Data Guru</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">30</h2>
                           
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Data Siswa</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">400</h2>
                             
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-money"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">Data Teknisi</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">10</h2>
                           
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="card-title text-white">Data Kelas</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">20</h2>
                                   
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-heart"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body pb-0 d-flex justify-content-between">
                                        <div>
                                            <h4 class="mb-1">Pengumuman</h4>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            
                                            <div class="media border-bottom-1 pt-3 pb-3">
                                                <img width="35" src="./images/avatar/1.jpg" class="mr-3 rounded-circle">
                                                <div class="media-body">
                                                    <h5>Received New Order</h5>
                                                    <p class="mb-0">I shared this on my fb wall a few months back,</p>
                                                </div><span class="text-muted ">April 24, 2018</span>
                                            </div>
                                            <div class="media border-bottom-1 pt-3 pb-3">
                                                <img width="35" src="./images/avatar/2.jpg" class="mr-3 rounded-circle">
                                                <div class="media-body">
                                                    <h5>iPhone develered</h5>
                                                    <p class="mb-0">I shared this on my fb wall a few months back,</p>
                                                </div><span class="text-muted ">April 24, 2018</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

                

                

                
                

                
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="./template/plugins/common/common.min.js"></script>
    <script src="./template/js/custom.min.js"></script>
    <script src="./template/js/settings.js"></script>
    <script src="./template/js/gleek.js"></script>
    <script src="./template/js/styleSwitcher.js"></script>

    <!-- Chartjs -->
    <script src="./template/plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="./template/plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="./template/plugins/d3v3/index.js"></script>
    <script src="./template/plugins/topojson/topojson.min.js"></script>
    <script src="./template/plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="./template/plugins/raphael/raphael.min.js"></script>
    <script src="./template/plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="./template/plugins/moment/moment.min.js"></script>
    <script src="./template/plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="./template/plugins/chartist/js/chartist.min.js"></script>
    <script src="./template/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



    <script src="./template/js/dashboard/dashboard-1.js"></script>

</body>

</html>