
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

        

            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Data Kelas</h4>
                                <div class="table-responsive">
                                    <table class="table header-border">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Ruang Kelas</th>
                                                <th scope="col">Jumlah Tampung</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th>1</th>
                                                <td>Ruang 1</td>
                                                <td>30</td>
                                         
                                            </tr>
                                            <tr>
                                                <th>2</th>
                                                <td>Ruang 2</td>
                                                <td>40</td>
                                               
                                            </tr>
                                            <tr>
                                                <th>3</th>
                                                <td>Ruang 3</td>
                                                <td>30</td>
                                               
                                            </tr>
                                            <tr>
                                                <th>4</th>
                                                <td>Ruang 4</td>
                                                <td>50</td>
                                            
                                            </tr>
                                            <tr>
                                                <th>5</th>
                                                <td>Ruang 5</td>
                                                <td>30</td>
                                           
                                            </tr>
                                        </tbody>
                                    </table>
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

    <script src="./template/plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="./template/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="./template/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>

</body>

</html>