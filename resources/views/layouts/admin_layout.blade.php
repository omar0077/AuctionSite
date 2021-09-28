<!doctype html>
<html lang="en" dir="ltr">

<!-- Mirrored from thememakker.com/templates/buzzer/sidebar/table-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Sep 2018 11:37:38 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="favicon.ico" type="image/x-icon"/>

    <title>:: Buzzer sidebar :: Table Datatable</title>

    <!-- Bootstrap Core and Font Icon -->
    <link rel="stylesheet"
          href="http://localhost/multiauth/resources/admin-assets/assets/plugins/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet"
          href="http://localhost/multiauth/resources/admin-assets/assets/plugins/animate-css/vivify.min.css"/>
    <link rel="stylesheet"
          href="http://localhost/multiauth/resources/admin-assets/assets/plugins/font-awesome/css/font-awesome.min.css">

    <!-- Plugins css -->
    <link rel="stylesheet"
          href="http://localhost/multiauth/resources/admin-assets/assets/plugins/datatable/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
          href="http://localhost/multiauth/resources/admin-assets/assets/plugins/datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css">
    <link rel="stylesheet"
          href="http://localhost/multiauth/resources/admin-assets/assets/plugins/datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css">
    <style>
        td.details-control {
            background: url('http://localhost/multiauth/resources/admin-assets/assets/images/details_open.html') no-repeat center center;
            cursor: pointer;
        }

        tr.shown td.details-control {
            background: url('http://localhost/multiauth/resources/admin-assets/assets/assets/images/details_close.html') no-repeat center center;
        }
    </style>
    <!-- Core css -->
    <link rel="stylesheet" href="http://localhost/multiauth/resources/admin-assets/sidebar-assets/css/main.css"/>
</head>

<body class="theme-cyan">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <img src="https://thememakker.com/templates/buzzer/assets/images/logo-icon.svg" alt="Buzzer">
    </div>
</div>
<!-- Overlay For Sidebars -->

<div id="main_content">

    <div id="header_top" class="header_top">
        <div class="container-fluid">
            <div class="d-flex">
                <a class="header-brand" href="index.html"><img
                            src="http://localhost/multiauth/resources/theme-assets/wp-content/uploads/2017/03/logo1-2.png"
                            class="header-brand-img"
                            alt="buzzerlogo"></a>
                <div class="top_menu d-flex order-lg-2">
                    <div class="hleft">

                    </div>
                    <div class="hright d-flex">
                        <div class="dropdown">
                            <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                                <img class="avatar"
                                     src="http://localhost/multiauth/resources/admin-assets/assets/images/user-image.png"
                                     alt=""/>
                                <span class="ml-2 d-none d-lg-block">
                                    <span class="user_name">{{ Auth::user()->name }}</span>
                                    <small class="text-muted d-block mt-1">Administrator</small>
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow vivify flipInY">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i
                                            class="dropdown-icon fe fe-log-out"></i> Sign out</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-sm btn-primary header-toggler d-xl-none ml-3 ml-xl-0" data-toggle="collapse"
                   data-target="#headerMenuCollapse"><span class="header-toggler-icon"></span></a>
            </div>
        </div>
    </div>

    <div id="left-sidebar" class="sidebar">
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu">
                <li class="g_heading">Main</li>
                <li><a href="{{url('admin')}}"><i class="icon-home"></i> <span>Dashboard</span></a></li>
                <li class="g_heading">Buzzer</li>
                <li>
                    <a href="javascript:void(0)" class="has-arrow"><i class="icon-grid"></i> Posts</a>
                    <ul>
                        <li><a href="{{url('admin/pending_posts')}}">Pending Posts</a></li>
                        <li><a href="{{url('admin/approved_posts')}}">Approved Posts</a></li>
                        <li><a href="{{url('admin/total_posts')}}">Total Posts</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)" class="has-arrow"><i class="icon-grid"></i> Users</a>
                    <ul>
                        <li><a href="{{url('admin/total_users')}}">Total Users</a></li>
                        <li><a href="{{url('admin/blocked_users')}}">Blocked Users</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>

    <div class="page">
        @yield('content')
        <footer class="footer" style="position: fixed;bottom: 0;width: 86%;">
            <div class="container-fluid">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-auto ml-lg-auto">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <ul class="list-inline list-inline-dots mb-0">
                                    <li class="list-inline-item"><a
                                                href="https://thememakker.com/templates/buzzer/doc/index.html">Documentation</a>
                                    </li>
                                    <li class="list-inline-item"><a href="#">FAQ</a></li>
                                </ul>
                            </div>
                            <div class="col-auto">
                                <a href="#" class="btn btn-outline-primary btn-sm">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-auto mt-3 mt-lg-0 text-center">
                        Copyright © 2018 <a href="https://themeforest.net/user/thememakker/portfolio">Buzzer</a>. Theme
                        by <a href="https://thememakker.com/" target="_blank">thememakker.com</a> All rights reserved.
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<script src="http://localhost/multiauth/resources/admin-assets/sidebar-assets/bundles/libscripts.bundle.js"></script>
<script src="http://localhost/multiauth/resources/admin-assets/sidebar-assets/bundles/vendorscripts.bundle.js"></script>

<script src="http://localhost/multiauth/resources/admin-assets/sidebar-assets/bundles/dataTables.bundle.js"></script>

<script src="http://localhost/multiauth/resources/admin-assets/sidebar-assets/bundles/mainscripts.bundle.js"></script>
<script src="http://localhost/multiauth/resources/admin-assets/sidebar-assets/js/table/datatable.js"></script>
</body>

<!-- Mirrored from thememakker.com/templates/buzzer/sidebar/table-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 12 Sep 2018 11:37:42 GMT -->
</html>
