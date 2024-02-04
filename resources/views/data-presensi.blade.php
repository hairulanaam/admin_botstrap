
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./template/images/favicon.png">
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
            Content body start
        ***********************************-->
        <div class="content-body">

        

            <div class="container-fluid">
                <div class="row">
                    
                    <!-- /# column -->
                        <!-- Doughnut Chart -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Rekap Data Siswa</h4>
                                <canvas id="doughutChart" width="500" height="250"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Rekap Data Guru</h4>
                                <canvas id="pieChart" width="500" height="250"></canvas>
                            </div>
                        </div>
                    </div>
                    
                </div>


                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h4>Rekap Data Siswa</h4>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Status</th>
                                                    <th>Jam Absen</th>
                                                    <th>Tanggal</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th>1</th>
                                                    <td>Feri</td>
                                                    <td><span class="badge badge-primary px-2">Masuk</span>
                                                    </td>
                                                    <td>06:32:22</td>
                                                    <td class="color-primary">12/01/2020</td>
                                                </tr>
                                                <tr>
                                                    <th>2</th>
                                                    <td>Rannga</td>
                                                    <td><span class="badge badge-danger px-2">Tidak Masuk</span>
                                                    </td>
                                                    <td></td>
                                                    <td class="color-success">12/01/2020</td>
                                                </tr>
                                                <tr>
                                                    <th>3</th>
                                                    <td>Oki</td>
                                                    <td><span class="badge badge-primary px-2">Masuk</span>
                                                    </td>
                                                    <td>06:46:12</td>
                                                    <td class="color-danger">12/01/2020</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title">
                                                <h4>Rekap Data Guru</h4>
                                            </div>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Name</th>
                                                            <th>Status</th>
                                                            <th>Jam Absen</th>
                                                            <th>Tanggal</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th>1</th>
                                                            <td>Feri</td>
                                                            <td><span class="badge badge-primary px-2">Masuk</span>
                                                            </td>
                                                            <td>06:32:22</td>
                                                            <td class="color-primary">12/01/2020</td>
                                                        </tr>
                                                        <tr>
                                                            <th>2</th>
                                                            <td>Rannga</td>
                                                            <td><span class="badge badge-danger px-2">Tidak Masuk</span>
                                                            </td>
                                                            <td></td>
                                                            <td class="color-success">12/01/2020</td>
                                                        </tr>
                                                        <tr>
                                                            <th>3</th>
                                                            <td>Oki</td>
                                                            <td><span class="badge badge-primary px-2">Masuk</span>
                                                            </td>
                                                            <td>06:46:12</td>
                                                            <td class="color-danger">12/01/2020</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                <div class="row">
                   
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Rader chart</h4>
                                <canvas id="radarChart" width="500" height="250"></canvas>
                            </div>
                        </div>
                    </div>
                    
                    <!-- /# column -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Team</h4>
                                <canvas id="team-chart" width="500" height="250"></canvas>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    
                </div>
                <!-- /# row -->
                <div class="row">
                    <!-- Bar Chart -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Bar chart</h4>
                                <canvas id="barChart" width="500" height="250"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Sales</h4>
                                <canvas id="sales-chart" width="500" height="250"></canvas>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <!-- Line Chart -->
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title"></h4>
                                <canvas id="lineChart" width="500" height="250"></canvas>
                            </div>
                        </div>
                    </div>
                    <!-- Pie Chart -->
                    
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

    <script src="./template/plugins/chart.js/Chart.bundle.min.js"></script>
    <script src="./template/js/plugins-init/chartjs-init.js"></script>

</body>

</html>