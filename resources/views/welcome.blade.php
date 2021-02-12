<!DOCTYPE html>
<html>


<!-- Mirrored from www.konnectplugins.com/proclinic/Vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Jan 2021 12:57:15 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HMS</title>
    <!-- Fav  Icon Link -->
    <link rel="shortcut icon" type="image/png" href="{{asset('hms/images/fav.png')}}">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('hms/css/bootstrap.min.css')}}">
    <!-- themify icons CSS -->
    <link rel="stylesheet" href="{{asset('hms/css/themify-icons.css')}}">
    <!-- Animations CSS -->
    <link rel="stylesheet" href="{{asset('hms/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('hms/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('hms/css/red.css')}}" id="style_theme">
    <link rel="stylesheet" href="{{asset('hms/css/responsive.css')}}">
    <!-- morris charts -->
    <link rel="stylesheet" href="{{asset('hms/charts/css/morris.css')}}">
    <!-- jvectormap -->
    <link rel="stylesheet" href="{{asset('hms/css/jquery-jvectormap.css')}}">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="sweetalert2.min.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">

    <script src="{{asset('hms/js/modernizr.min.js')}}"></script>
</head>

<body>
<!-- Pre Loader -->


<div class="loading">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>
<!--/Pre Loader -->
<div id="app">
<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar" class="proclinic-bg" v-if="!['login', 'register','reset','forgot'].includes($route.name)">
        <div class="sidebar-header">
            <a href="index.html"><img src="{{asset('hms/images/logo.png')}}" class="logo" alt="logo"></a>
        </div>
        <ul class="list-unstyled components">
            <li class="active">
                <router-link to="/home" data-toggle="collapse" aria-expanded="true">
                    <span class="ti-home"></span> Dashboard
                </router-link>

            </li>

            <li>
                <a href="#nav-doctors" data-toggle="collapse" aria-expanded="false">
                    <span class="ti-user"></span> Doctors
                </a>
                <ul class="collapse list-unstyled" id="nav-doctors">
                    <li>
                        <router-link to="/add-doctor">Add Doctor</router-link>
                    </li>
                    <li>
                        <router-link to="/doctors-list">All Doctors</router-link>
                    </li>
                    <li>
                        <a href="about-doctor.html">Doctor Details</a>
                    </li>
                    <li>
                        <a href="edit-doctor.html">Edit Doctor</a>
                    </li>
                </ul>
            </li>

        </ul>
        <div class="nav-help animated fadeIn">
            <h5><span class="ti-comments"></span> Need Help</h5>
            <h6>
                <span class="ti-mobile"></span> +1 1234 567 890</h6>
            <h6>
                <span class="ti-email"></span> email@site.com</h6>
            <p class="copyright-text">Copy rights &copy; 2018</p>
        </div>
    </nav>
    <!-- /Sidebar -->
    <!-- Page Content -->
    <div id="content">

        <!-- Breadcrumb -->


        <!-- /Breadcrumb -->
        <!-- Main Content -->

        <topbar></topbar>

        <!-- Main Content -->
        <div class="container-fluid">

            <router-view></router-view>


        </div>
        <!-- /Main Content -->

    </div>
    <!-- /Page Content -->
</div>
<!-- Back to Top -->
<a id="back-to-top" href="#" class="back-to-top">
    <span class="ti-angle-up"></span>
</a>
</div>
<!-- /Back to Top -->

<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('hms/js/jquery-3.2.1.min.js')}}"></script>
<!-- Popper Library-->
<script src="{{asset('hms/js/popper.min.js')}}"></script>
<!-- Bootstrap Library-->

<!-- morris charts -->
<script src="{{asset('hms/charts/js/raphael-min.js')}}"></script>
<script src="{{asset('hms/charts/js/morris.min.js')}}"></script>
<script src="{{asset('hms/js/custom-morris.js')}}"></script>

<!-- Custom Script-->
<script src="{{asset('hms/js/custom.js')}}"></script>


</body>


<!-- Mirrored from www.konnectplugins.com/proclinic/Vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Jan 2021 12:57:49 GMT -->
</html>
