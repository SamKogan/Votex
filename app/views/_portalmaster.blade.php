<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    @yield('title')

    {{ HTML::style('css/bootstrap.css') }}

    <!-- Custom CSS -->
    {{ HTML::style('css/stylish-portfolio.css') }}

    <!-- Custom Fonts -->
    {{ HTML::style('font-awesome-4.1.0/css/font-awesome.min.css') }}

    {{ HTML::style('http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic') }}

</head>

<body>

<!-- Check for Flash Messages -->
@if(Session::get('flash_message'))
      <? //echo Session::get('flash_message') ?>
@endif

    <!-- TopNavBar -->
    <nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">
            {{ HTML::image('img/votex-small.png', 'brand', array('style'=>'width:20px;padding-top:3px;')) }}
          </a>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li>

            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ "Welcome ".Auth::user()->name."!  "; }}<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/demo/logout">Log out</a></li>
                <li class="divider"></li>
                <li><a href="/demo/mysettings">Account settings</a></li>
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
                <li role="presentation" @yield('li1') ><a href="/demo/portal">Upcoming Votes <span class="badge">3</span></a></li>
                <li role="presentation" @yield('li2') ><a href="/demo/mypolicy">My Policy</a></li>
                <li role="presentation" @yield('li3') ><a href="/demo/advocacygroups">Advocacy Groups</a></li>
                <li role="presentation" @yield('li4') ><a href="/demo/mysettings">My Settings</a></li>
            </ul>
        </div>

        <div class="main col-xs-9">
            @yield('content')
        </div>

    </div>
</div>

    <!-- jQuery -->
    {{ HTML::script('js/jquery.js') }}

    <!-- Bootstrap Core JavaScript -->
    {{ HTML::script('js/bootstrap.min.js') }}
</body>

</html>