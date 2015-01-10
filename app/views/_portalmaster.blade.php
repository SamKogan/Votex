<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    @yield('title')

    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<!-- Check for Flash Messages -->
<!-- Check for Flash Messages -->
@if(Session::get('flash_message'))
      <? //echo Session::get('flash_message') ?>
@endif

    <!-- TopNavBar -->
    <nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
            <img alt="Brand" src="img/votex-small.png" style="width:20px;padding-top:3px;">
          </a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li>

            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ "Welcome ".Auth::user()->name."!  "; }}<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/logout">Log out</a></li>
                <li class="divider"></li>
                <li><a href="#">Account settings</a></li>
              </ul>
            </li>
        </ul>
      </div>
    </nav>

<div class="container">
    <div class="content">

    <!-- SideNav pills -->
        <div class="sidenav col-xs-3">
            <ul class="nav nav-pills nav-stacked" style="max-width: 200px;">
                <li role="presentation" @yield('li1') ><a href="/portal">Upcoming Votes <span class="badge">3</span></a></li>
                <li role="presentation" @yield('li2') ><a href="/mypolicy">My Policy</a></li>
                <li role="presentation" @yield('li3') ><a href="/advocacygroups">Advocacy Groups</a></li>
                <li role="presentation" @yield('li4') ><a href="/mysettings">My Settings</a></li>
            </ul>
        </div>

        <div class="main col-xs-9">
            @yield('content')
        </div>

    </div>
</div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>

</html>