
<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/ICON.png">
    <link rel="icon" type="image/png" href="assets/img/ICON.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>أب دريم - إدارة الموقع</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href={{asset("assets/css/bootstrap.min.css")}} rel="stylesheet" />
    <link href={{asset("assets/css/now-ui-dashboard.css?v=1.0.1")}} rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href={{asset("assets/demo/demo.css")}} rel="stylesheet" />
    <script src="{{asset('assets/dropzone.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>
    <!-- ARABIC GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">
    <style>
        .nav .open > a
        {
            background:#fff;
        // Put in styling
        }
    </style>

</head>
<body class="row flex-lg-row" style="display:flex; flex-direction: row; justify-content: center; align-items: center">
<div class="row flex-lg-row " style="display:flex; flex-direction: row; justify-content: center; align-items: center">
    <div class="sidebar" data-color="blue">
        <!--
    ||||
-->
        <div class="logo">
            <a href="http://www.linakaloda.com" class="simple-text logo-mini">
                <img src={{asset("assets/img/icon.svg")}}>
            </a>
             <h1 style="color: #f7f7f7">
                 أب دريم
             </h1>
                   </div>
        <div class="sidebar-wrapper">
            <ul class="nav nav-pills ">
                <li class="{{is_active('home')}}">
                    <a href="{{url('admin/home')}}">
                        <i class="now-ui-icons  business_bank"></i>
                        <p>الرئيسية</p>
                    </a>
                </li>
                <li class="{{is_active('users')}}">
                    <a href="{{url('admin/users')}}">
                        <i class="now-ui-icons education_atom users_single-02"></i>
                        <p>الأعضاء</p>
                    </a>
                </li>
                <li class="{{is_active('apps')}}">
                    <a href="{{url('admin/apps')}}">
                        <i class="now-ui-icons location_map-big"></i>
                        <p>التطبيقات</p>
                    </a>
                </li>
                <li class="{{is_active('messages')}}">
                    <a href="{{url('admin/messages')}}">
                        <i class="now-ui-icons ui-1_bell-53"></i>
                        <p>الرسائل</p>
                    </a>
                </li>
                <li class="{{is_active('settings')}}">
                    <a href="{{url('admin/settings')}}">
                        <i class="now-ui-icons loader_gear"></i>
                        <p>الإعدادت</p>
                    </a>
                </li>
                <li>
                    <a href="{{url('logoutUser')}}">
                        <i class="now-ui-icons design_bullet-list-67"></i>
                        <p>تسجيل الخروج</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div   style="background-color: #fff">
        @yield('content')
    </div>
</div>

</body>
<!--   Core JS Files   -->
<script src={{asset("assets/js/core/jquery.min.js")}}></script>
<script src={{asset("assets/js/core/popper.min.js")}}></script>
<script src={{asset("assets/js/core/bootstrap.min.js")}}></script>
<script src={{asset("assets/js/plugins/perfect-scrollbar.jquery.min.js")}}></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src={{asset("assets/js/plugins/chartjs.min.js")}}></script>
<!--  Notifications Plugin    -->
<script src={{asset("assets/js/plugins/bootstrap-notify.js")}}></script>
<!-- Control Center for LK UI Dashboard: parallax effects, scripts for the example pages etc -->
<script src={{asset("assets/js/now-ui-dashboard.js?v=1.0.1")}}></script>
<!-- LK UI Dashboard DEMO methods, don't include it in your project! -->
<script src={{asset("assets/demo/demo.js")}}></script>
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();
    });
</script>

</html>
