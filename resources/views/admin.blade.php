<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="HTML5 Template" />
<meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
<meta name="author" content="potenzaglobalsolutions.com" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Blog - Admin</title>

<!-- Favicon -->

<!-- Font -->
<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

<!-- css -->
<link rel="stylesheet" type="text/css" href="/admin-site/css/style.css" />
 
</head>

<body>

<div class="wrapper">

<!--=================================
 preloader -->
 
<div id="pre-loader">
    <img src="/admin-site/images/pre-loader/loader-01.svg" alt="">
</div>

<!--=================================
 preloader -->

<!--=================================
 header start-->

<nav class="admin-header navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <!-- logo -->
  <div class="text-left navbar-brand-wrapper">
    <a class="navbar-brand brand-logo" href="index.html"><img src="/admin-site/images/logo-dark.png" alt="" ></a>
    <a class="navbar-brand brand-logo-mini" href="index.html"><img src="/admin-site/images/logo-icon-dark.png" alt=""></a>
  </div>
  <!-- Top bar left -->
  <ul class="nav navbar-nav mr-auto">
    <li class="nav-item">
      <a id="button-toggle" class="button-toggle-nav inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu ti-align-right"></i></a>
    </li>
  </ul>
  <!-- top bar right -->
  <ul class="nav navbar-nav ml-auto">
    
    <li class="nav-item dropdown mr-30">
      <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
        <img src="/admin-site/images/profile-avatar.jpg" alt="avatar">
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-header">
          <div class="media">
            <div class="media-body">
              <h5 class="mt-0 mb-0">{{ Auth::user()->name.' '.Auth::user()->last_name }}</h5>
              <span>{{ Auth::user()->email }}</span>
            </div>
          </div>
        </div>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            <i class="text-danger ti-unlock"></i>{{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
      </div>
    </li>
  </ul>
</nav>

<!--=================================
 header End-->

<!--=================================
 Main content -->

<div class="container-fluid">
  <div class="row">
    <!-- Left Sidebar -->
    <div class="side-menu-fixed">
     <div class="scrollbar side-menu-bg">
        <ul class="nav navbar-nav side-menu" id="sidebarnav">
        <!-- menu item Dashboard-->
            <li>
                <a href="/">
                    <div class="pull-left"><i class="ti-home"></i><span class="right-nav-text">Dashboard</span></div><div class="clearfix"></div>
                </a>
            </li>
            <li>
                <a href="javascript:void(0);" data-toggle="collapse" data-target="#post">
                    <div class="pull-left"><i class="ti-file"></i><span class="right-nav-text">Post</span></div>
                    <div class="pull-right"><i class="ti-plus"></i></div><div class="clearfix"></div>
                </a>
                <ul id="post" class="collapse" data-parent="#sidebarnav">
                    <li> <a href="{{ route('posts.create') }}">Crear nuevo post</a> </li>
                    <li> <a href="{{ route('posts.index') }}">Ver lista de post</a> </li>
                </ul>
            </li>
        </ul>
      </li>
    </ul>
  </div> 
</div> 
<!-- Left Sidebar End-->

<!--=================================
 Main content -->

 <!--=================================
Content -->
    @yield('content')
     
  </div>
</div>
</div>

<!--=================================
 footer -->



<!--=================================
 jquery -->

<!-- jquery -->
<script src="/admin-site/js/jquery-3.3.1.min.js"></script>

<!-- plugins-jquery -->
<script src="/admin-site/js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>var plugin_path = '/admin-site/js/';</script>

<!-- chart -->
<script src="/admin-site/js/chart-init.js"></script>

<!-- calendar -->
<script src="/admin-site/js/calendar.init.js"></script>

<!-- charts sparkline -->
<script src="/admin-site/js/sparkline.init.js"></script>

<!-- charts morris -->
<script src="/admin-site/js/morris.init.js"></script>

<!-- datepicker -->
<script src="/admin-site/js/datepicker.js"></script>

<!-- sweetalert2 -->
<script src="/admin-site/js/sweetalert2.js"></script>

<!-- toastr -->
<script src="/admin-site/js/toastr.js"></script>

<!-- validation -->
<script src="/admin-site/js/validation.js"></script>

<!-- lobilist -->
<script src="/admin-site/js/lobilist.js"></script>
 
<!-- custom -->
<script src="/admin-site/js/custom.js"></script>
 
</body>
</html>