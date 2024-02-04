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

        <div class="content-body">

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4>Kalender Akademik</h4>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 mt-5">
                                        <a href="#" data-toggle="modal" data-target="#add-category" class="btn btn-primary btn-block"><i class="ti-plus f-s-12 m-r-5"></i> Create New</a>
                                        <div id="external-events" class="m-t-20">
                                            <p>Drag and drop your event or click in the calendar</p>
                                            <div class="external-event bg-primary text-white" data-class="bg-primary"><i class="fa fa-move"></i>New Theme Release</div>
                                            <div class="external-event bg-success text-white" data-class="bg-success"><i class="fa fa-move"></i>My Event</div>
                                            <div class="external-event bg-warning text-white" data-class="bg-warning"><i class="fa fa-move"></i>Meet manager</div>
                                            <div class="external-event bg-dark text-white" data-class="bg-dark"><i class="fa fa-move"></i>Create New theme</div>
                                        </div>
                                        <!-- checkbox -->
                                        <div class="checkbox m-t-40">
                                            <input id="drop-remove" type="checkbox">
                                            <label for="drop-remove">Remove after drop</label>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-box m-b-50">
                                            <div id="calendar"></div>
                                        </div>
                                    </div>

                                    <!-- end col -->
                                    <!-- BEGIN MODAL -->
                                    <div class="modal fade none-border" id="event-modal">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title"><strong>Add New Event</strong></h4>
                                                </div>
                                                <div class="modal-body"></div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                                    <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Modal Add Category -->
                                    <div class="modal fade none-border" id="add-category">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title"><strong>Add a category</strong></h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label class="control-label">Category Name</label>
                                                                <input class="form-control form-white" placeholder="Enter name" type="text" name="category-name">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label class="control-label">Choose Category Color</label>
                                                                <select class="form-control form-white" data-placeholder="Choose a color..." name="category-color">
                                                                    <option value="success">Success</option>
                                                                    <option value="danger">Danger</option>
                                                                    <option value="info">Info</option>
                                                                    <option value="pink">Pink</option>
                                                                    <option value="primary">Primary</option>
                                                                    <option value="warning">Warning</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-danger waves-effect waves-light save-category" data-dismiss="modal">Save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END MODAL -->
                                </div>
                            </div>
                        </div>
                        <!-- /# card -->
                    </div>
                    <!-- /# column -->
                </div>
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
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

    
    <script src="./template/plugins/jqueryui/js/jquery-ui.min.js"></script>
    <script src="./template/plugins/moment/moment.min.js"></script>
    <script src="./template/plugins/fullcalendar/js/fullcalendar.min.js"></script>
    <script src="./template/js/plugins-init/fullcalendar-init.js"></script>

</body>

</html>