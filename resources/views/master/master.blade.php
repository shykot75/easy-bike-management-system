<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('/')}}img/vs_logo.png">


    <link href="{{asset('/')}}datatable/assets/css/vendor.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}datatable/assets/plugins/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}datatable/assets/plugins/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}datatable/assets/plugins/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}datatable/assets/plugins/datatables.net-colreorder-bs5/css/colReorder.bootstrap5.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}datatable/assets/plugins/datatables.net-keytable-bs5/css/keyTable.bootstrap5.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}datatable/assets/plugins/datatables.net-rowreorder-bs5/css/rowReorder.bootstrap5.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}datatable/assets/plugins/datatables.net-select-bs5/css/select.bootstrap5.min.css" rel="stylesheet" />


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="https://fonts.maateen.me/solaiman-lipi/font.css" rel="stylesheet">

    <!-- Bootstrap Css -->
    <link href="{{asset('/')}}assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('/')}}assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('/')}}assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <!-- Sweetalert Css-->
    <link href="{{asset('/')}}assets/css/sweetalert.css" id="app-style" rel="stylesheet" type="text/css" />

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Custom Css-->
    <link rel="stylesheet" href="{{asset('/')}}css/style.css">

</head>


<body data-sidebar="dark">

<!-- Begin page -->
<div id="layout-wrapper">

    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">

                    <a href="" class="logo logo-light">
                                <span class="logo-sm" >
                                    <img src="{{asset('/')}}img/admin.png" alt="" height="40">

                                </span>
                        <span class="logo-lg" >
                                    <img src="{{asset('/')}}img/admin.png" alt=""  height="40">
                                </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                    <i class="fa fa-fw fa-bars"></i>
                </button>

                <!-- App Search-->
                <a class="app-search d-none d-lg-block" href="{{route('license.searchNew')}}">
                    <button class="btn btn-danger  font-size-15">লাইসেন্সধারী অনুসন্ধান <i class="fas fa-search"></i></button>

                </a>


            </div>





            <div class="d-flex">
                <div class="d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{asset('/')}}img/logo.jpeg" height="60" style="float: left; margin-right: 10px;">
                        <span class="site-headline" style="font-size: 18px; font-weight: 800; color: #2c3e50;" >ডিজিটাল ইজিবাইক লাইসেন্স ম্যানেজমেন্ট সিস্টেম</span><br>
                        <span class="site-tagline" style="font-size: 15px; font-weight: 600; color: #2c3e50;" >লক্ষ্মীপুর পৌরসভা</span>
                    </button>

                </div>
            </div>







            <div class="d-flex">
                <div class="dropdown d-inline-block" style="font-family: Arial, sans-serif;">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user" src="{{asset('/')}}img/admin.png"
                             alt="Header Avatar">
                        <span class="d-none d-xl-inline-block ml-1" style="font-size: 14px; font-weight: 600; letter-spacing: 1px;">{{Auth::user()->name}}</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                        <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle mr-1"></i> Profile</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="" onclick="event.preventDefault(); document.getElementById('logoutForm').submit(); "><i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Logout</a>
                        <form action="{{route('logout')}}" method="POST" id="logoutForm">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header> <!-- ========== Left Sidebar Start ========== -->
    <div class="vertical-menu" >

        <div data-simplebar class="h-100 mt-4">

            <!--- Sidemenu -->
            <div id="sidebar-menu" >
                <!-- Left Menu Start -->
                <ul class="metismenu list-unstyled" id="side-menu" >
                    <li class="menu-title">Menu</li>

                    <li>
                        <a href="{{route('dashboard')}}" class="waves-effect">
                            <i class="bx bx-home-circle"></i>
                            <span style="font-size: 18px;  letter-spacing: 1px;">হোম</span>
                        </a>

                    </li>


                    <li class="">
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="bx bx-id-card"></i>

                            <span style="font-size: 18px;  letter-spacing: 1px;">লাইসেন্সধারী</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a style="font-size: 16px;  letter-spacing: 1px;" href="{{route('license.addNew')}}">লাইসেন্সধারী যোগ</a></li>
                            <li><a style="font-size: 16px;  letter-spacing: 1px;" href="{{route('license.manageNew')}}">লাইসেন্সধারীর তালিকা</a></li>


                        </ul>
                    </li>

                    <li>
                        <a href="{{route('issue.bill')}}" class="waves-effect">
                            <i class="bx bx-receipt"></i>
                            <span style="font-size: 18px;  letter-spacing: 1px;">বিল ইস্যু</span>
                        </a>

                    </li>

                    <li>
                        <a href="{{route('issue.certificate')}}" class="waves-effect">
                            <i class="fa fa-certificate"></i>
                            <span style="font-size: 18px;  letter-spacing: 1px;">সনদ ইস্যু</span>
                        </a>

                    </li>





                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">

        <div class="page-content">

        @yield('body')

        <!-- container-fluid -->
        </div>
        <!-- End Page-content -->



        <footer class="footer" style="font-family: Arial, sans-serif;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> ©Lakshmipur Pourashava.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-right d-none d-sm-block">
                            Design & Develop by <a href="">Shykot Hasan Shourav</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->





<!-- JAVASCRIPT -->
<script src="{{asset('/')}}assets/libs/jquery/jquery.min.js"></script>
<script src="{{asset('/')}}assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}assets/libs/metismenu/metisMenu.min.js"></script>
<script src="{{asset('/')}}assets/libs/simplebar/simplebar.min.js"></script>
<script src="{{asset('/')}}assets/libs/node-waves/waves.min.js"></script>
<script src="{{asset('/')}}assets/libs/sweetalert/sweetalert.min.js"></script>

<!-- apexcharts -->
<script src="{{asset('/')}}assets/libs/apexcharts/apexcharts.min.js"></script>

<script src="{{asset('/')}}assets/js/pages/dashboard.init.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
{{--<!-- Required datatable js -->--}}
{{--<script src="{{asset('/')}}assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>--}}
{{--<script src="{{asset('/')}}assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>--}}
{{--<!-- Buttons examples -->--}}
{{--<script src="{{asset('/')}}assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>--}}
{{--<script src="{{asset('/')}}assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>--}}
{{--<script src="{{asset('/')}}assets/libs/jszip/jszip.min.js"></script>--}}
{{--<script src="{{asset('/')}}assets/libs/pdfmake/build/pdfmake.min.js"></script>--}}
{{--<script src="{{asset('/')}}assets/libs/pdfmake/build/vfs_fonts.js"></script>--}}
{{--<script src="{{asset('/')}}assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>--}}
{{--<script src="{{asset('/')}}assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>--}}
{{--<script src="{{asset('/')}}assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>--}}

{{--<!-- Responsive examples -->--}}
{{--<script src="{{asset('/')}}assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>--}}
{{--<script src="{{asset('/')}}assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>--}}

{{--<!-- Datatable init js -->--}}
{{--<script src="{{asset('/')}}assets/js/pages/datatables.init.js"></script>--}}

<!-- App js -->
<script src="{{asset('/')}}assets/js/app.js"></script>

<script src="{{asset('/')}}datatable/assets/js/vendor.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/datatables.net/js/jquery.dataTables.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/datatables.net-bs5/js/dataTables.bootstrap5.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/datatables.net-colreorder/js/dataTables.colReorder.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/datatables.net-colreorder-bs5/js/colReorder.bootstrap5.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/datatables.net-keytable/js/dataTables.keyTable.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/datatables.net-keytable-bs5/js/keyTable.bootstrap5.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/datatables.net-rowreorder/js/dataTables.rowReorder.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/datatables.net-rowreorder-bs5/js/rowReorder.bootstrap5.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/datatables.net-select/js/dataTables.select.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/datatables.net-select-bs5/js/select.bootstrap5.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/datatables.net-buttons/js/buttons.flash.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/datatables.net-buttons/js/buttons.html5.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/datatables.net-buttons/js/buttons.print.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/pdfmake/build/pdfmake.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/pdfmake/build/vfs_fonts.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/jszip/dist/jszip.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/js/demo/table-manage-combine.demo.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/plugins/%40highlightjs/cdn-assets/highlight.min.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>
<script src="{{asset('/')}}datatable/assets/js/demo/render.highlight.js" type="256de2ca2ad2c51ca6e849ef-text/javascript"></script>

<script type="256de2ca2ad2c51ca6e849ef-text/javascript">
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-53034621-1', 'auto');
		ga('send', 'pageview');

	</script>
<script src="{{asset('/')}}datatable/assets/js/rocket-loader.min.js" data-cf-settings="256de2ca2ad2c51ca6e849ef-|49" defer=""></script><script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"71417a56785b78b7","version":"2021.12.0","r":1,"token":"4db8c6ef997743fda032d4f73cfeff63","si":100}' crossorigin="anonymous"></script>

</body>





</html>
