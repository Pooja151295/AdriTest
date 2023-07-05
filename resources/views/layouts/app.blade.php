<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
<title>Preadmin - Bootstrap Admin Template</title>
<link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome/css/all.min.css">
<link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/fullcalendar.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" type="text/css" href="assets/plugins/morris/morris.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<!--[if lt IE 9]>
			<script src="assets/js/html5shiv.min.js"></script>
			<script src="assets/js/respond.min.js"></script>
		<![endif]-->
</head>
<body>
<div class="main-wrapper">
<div class="header">
<div class="header-left">
<a href="index.html" class="logo">
<img src="assets/img/logo.png" width="40" height="40" alt="">
</a>
</div>
<div class="page-title-box float-left">
<h3>Preadmin</h3>
</div>
<a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars" aria-hidden="true"></i></a>
<ul class="nav user-menu float-right">
<li class="nav-item dropdown d-none d-sm-block">
<div class="dropdown-menu notifications">

<div class="drop-scroll">
<ul class="notification-list">
<li class="notification-message">
<a href="activities.html">
<div class="media">
<span class="avatar">
<img alt="John Doe" src="assets/img/user.jpg" class="img-fluid">
</span>

</div>
</a>
</li>

</ul>
</div>
</div>
</li>
<li class="nav-item dropdown has-arrow">
<a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
<span class="user-img">
<img class="rounded-circle" src="assets/img/user.jpg" width="40" alt="Admin">
<span class="status online"></span>
</span>
<span>Admin</span>
</a>
<div class="dropdown-menu">
<a class="dropdown-item" href="login">Logout</a>
</div>
</li>
</ul>
<div class="dropdown mobile-user-menu float-right">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
<div class="dropdown-menu dropdown-menu-right">
<a class="dropdown-item" href="login.html">Logout</a>
</div>
</div>
</div>
<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li class="menu-title">Main</li>
<li class="active">
<a href="{{ route('company') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
</li>
<li>
<a href="{{ route('company') }}"><i class="fa fa-building" aria-hidden="true"></i> Companies</a>
</li>
<li>
<a href="{{ route('company') }}"><i class="fa fa-users" aria-hidden="true"></i>Employees</a>
</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
<div class="page-wrapper">
<div class="content container-fluid">
@yield('content')
</div>
</div>
<div class="themes">
<div class="themes-icon"><i class="fa fa-cog"></i></div>
<div class="themes-body">
<ul id="theme-change" class="theme-colors">
<li><a href="../light/index.html"><span class="theme-light"></span></a></li>
<li><a href="../orange/index.html"><span class="theme-orange"></span></a></li>
<li><a href="../purple/index.html"><span class="theme-purple"></span></a></li>
<li><a href="../blue/index.html"><span class="theme-blue"></span></a></li>
<li><a href="../dark/index.html"><span class="theme-dark"></span></a></li>
<li><a href="../rtl/index.html"><span class="theme-rtl">RTL</span></a></li>
</ul>
</div>
</div>
</div>
<div class="notification-box">
<div class="msg-sidebar notifications msg-noti">
<div class="topnav-dropdown-header">
<span>Messages</span>
</div>
<div class="drop-scroll msg-list-scroll">
<ul class="list-box">
<li>
<a href="chat.html">
<div class="list-item">
<div class="list-left">
<span class="avatar">R</span>
</div>
<div class="list-body">
<span class="message-author">Richard Miles </span>
<span class="message-time">12:28 AM</span>
<div class="clearfix"></div>
<span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
</div>
</div>
</a>
</li>
</ul>
</div>
<div class="topnav-dropdown-footer">
<a href="chat.html">See all messages</a>
</div>
</div>
</div>

</div>

</div>

<div class="sidebar-overlay" data-reff=""></div>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="assets/js/moment.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/jquery.slimscroll.js"></script>

<script type="text/javascript" src="assets/js/select2.min.js"></script>

<script type="text/javascript" src="assets/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="assets/plugins/morris/morris.min.js"></script>
<script type="text/javascript" src="assets/plugins/raphael/raphael.min.js"></script>

<script src="assets/js/app.js"></script>
</body>
</html>