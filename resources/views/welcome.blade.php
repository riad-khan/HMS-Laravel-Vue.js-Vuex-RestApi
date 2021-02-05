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
    <nav id="sidebar" class="proclinic-bg" v-show="$route.path === '/' || $route.path ==='/register' || $route.path === '/forgotPassword'|| $route.path === '/print' ? false : true" style="display: none;">
        <div class="sidebar-header">
            <a href="index.html"><img src="{{asset('hms/images/logo.png')}}" class="logo" alt="logo"></a>
        </div>
        <ul class="list-unstyled components">
            <li class="active">
                <a href="#nav-dashboard" data-toggle="collapse" aria-expanded="true">
                    <span class="ti-home"></span> Dashboard
                </a>
                <ul class="collapse list-unstyled show" id="nav-dashboard">
                    <li>
                        <a href="index.html">Vertical</a>
                    </li>
                    <li>
                        <a href="https://www.konnectplugins.com/proclinic/Vertical-RTL/index.html">Vertical RTL</a>
                    </li>
                    <li>
                        <a href="https://www.konnectplugins.com/proclinic/Horizontal/index.html">Horizantal</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#nav-patients" data-toggle="collapse" aria-expanded="false">
                    <span class="ti-wheelchair"></span> Patients
                </a>
                <ul class="collapse list-unstyled" id="nav-patients">
                    <li>
                        <a href="add-patient.html">Add Patient</a>
                    </li>
                    <li>
                        <a href="patients.html">All Patients</a>
                    </li>
                    <li>
                        <a href="about-patient.html">Patient Details</a>
                    </li>
                    <li>
                        <a href="edit-patient.html">Edit Patient</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#nav-doctors" data-toggle="collapse" aria-expanded="false">
                    <span class="ti-user"></span> Doctors
                </a>
                <ul class="collapse list-unstyled" id="nav-doctors">
                    <li>
                        <a href="add-doctor.html">Add Doctor</a>
                    </li>
                    <li>
                        <a href="doctors.html">All Doctors</a>
                    </li>
                    <li>
                        <a href="about-doctor.html">Doctor Details</a>
                    </li>
                    <li>
                        <a href="edit-doctor.html">Edit Doctor</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#nav-appointment" data-toggle="collapse" aria-expanded="false">
                    <span class="ti-pencil-alt"></span> Appointments
                </a>
                <ul class="collapse list-unstyled" id="nav-appointment">
                    <li>
                        <a href="add-appointment.html">Add Appointment</a>
                    </li>
                    <li>
                        <a href="appointments.html">All Appointments</a>
                    </li>
                    <li>
                        <a href="about-appointment.html">Appointment Details</a>
                    </li>
                    <li>
                        <a href="edit-appointment.html">Edit Appointment</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#nav-payment" data-toggle="collapse" aria-expanded="false">
                    <span class="ti-money"></span> Payments
                </a>
                <ul class="collapse list-unstyled" id="nav-payment">
                    <li>
                        <a href="add-payment.html">Add Payment</a>
                    </li>
                    <li>
                        <a href="payments.html">All Payments</a>
                    </li>
                    <li>
                        <a href="about-payment.html">Payment Invoice</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#nav-rooms" data-toggle="collapse" aria-expanded="false">
                    <span class="ti-key"></span> Room Allotments
                </a>
                <ul class="collapse list-unstyled" id="nav-rooms">
                    <li>
                        <a href="add-room.html">Add Room Allotment</a>
                    </li>
                    <li>
                        <a href="rooms.html">All Rooms</a>
                    </li>
                    <li>
                        <a href="edit-room.html">Edit Room Allotment</a>
                    </li>
                </ul>
            </li>
            <li class="nav-level-one">
                <a href="#nav-uiKit" data-toggle="collapse" aria-expanded="false">
                    <span class="ti-layout-tab"></span> UI Kit
                </a>
                <ul class="list-unstyled collapse" aria-expanded="true" id="nav-uiKit">
                    <li>
                        <a href="typography.html">Typography</a>
                    </li>
                    <li>
                        <a href="buttons.html">Buttons</a>
                    </li>
                    <li>
                        <a href="cards.html">Cards</a>
                    </li>
                    <li>
                        <a href="tabs.html">Tabs</a>
                    </li>
                    <li>
                        <a href="accordions.html">Accordions</a>
                    </li>
                    <li>
                        <a href="modals.html">Modals</a>
                    </li>
                    <li>
                        <a href="lists.html">Lists &amp; Media Object</a>
                    </li>
                    <li>
                        <a href="grid.html">Grid</a>
                    </li>
                    <li>
                        <a href="progress-bars.html">Progress Bars</a>
                    </li>
                    <li>
                        <a href="notifications-alerts.html">Notifications &amp; Alerts</a>
                    </li>
                    <li>
                        <a href="pagination.html">Pagination</a>
                    </li>
                    <li>
                        <a href="carousel.html">Carousel</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="tables.html">
                    <span class="ti-layout-menu-v"></span> Tables
                </a>
            </li>
            <li>
                <a href="#nav-charts" data-toggle="collapse" aria-expanded="false">
                    <span class="ti-pie-chart"></span> Charts
                </a>
                <ul class="collapse list-unstyled" id="nav-charts">
                    <li>
                        <a href="charts-1.html">Morris</a>
                    </li>
                    <li>
                        <a href="charts-2.html">Flot</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#nav-maps" data-toggle="collapse" aria-expanded="false">
                    <span class="ti-location-pin"></span> Maps
                </a>
                <ul class="collapse list-unstyled" id="nav-maps">
                    <li>
                        <a href="map-1.html">Google Maps</a>
                    </li>
                    <li>
                        <a href="map-2.html">Vector Maps</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="forms.html">
                    <span class="ti-layout-media-overlay-alt-2"></span> Forms
                </a>
            </li>
            <li>
                <a href="#nav-icons" data-toggle="collapse" aria-expanded="false">
                    <span class="ti-themify-favicon"></span> icons
                </a>
                <ul class="collapse list-unstyled" id="nav-icons">
                    <li>
                        <a href="font-awesome.html">Font Awesome </a>
                    </li>
                    <li>
                        <a href="themify.html">Themify</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#nav-pages" data-toggle="collapse" aria-expanded="false">
                    <span class="ti-file"></span> Other Pages
                </a>
                <ul class="collapse list-unstyled" id="nav-pages">
                    <li>
                        <a href="login.html">Login </a>
                    </li>
                    <li>
                        <a href="sign-up.html">Sign Up</a>
                    </li>
                    <li>
                        <a href="404.html">404</a>
                    </li>
                    <li>
                        <a href="blank-page.html">Blank Page</a>
                    </li>
                    <li>
                        <a href="pricing.html">Pricing</a>
                    </li>
                    <li>
                        <a href="faq.html">FAQ</a>
                    </li>
                    <li>
                        <a href="invoice.html">Invoice</a>
                    </li>
                    <li>
                        <a href="blank-page.html">Coming Soon</a>
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
