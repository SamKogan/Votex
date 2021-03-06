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

<!--     {{ HTML::style('http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic') }}
 -->
</head>

<body>

<!-- Check for Flash Messages -->
@if(Session::get('flash_message'))
      <? //echo Session::get('flash_message') ?>
@endif

    <!-- TopNavBar -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
            <button type="button" style="height: 35px; margin-top:5px; margin-bottom: 5px;" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsablenav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
          <a class="navbar-brand" href="/demo/portal">
            {{ HTML::image('img/votex.png', 'brand', array('style'=>'width:70px;padding-top:0px;')) }}
          </a>
        </div>

        <div class="collapse navbar-collapse" id="collapsablenav">
        <ul class="nav navbar-nav navbar-right">
            <li>
            <a href="/">About</a>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{Auth::user()->name}}</span><span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/demo/logout">Log out</a></li>
                <li class="divider"></li>
                <li><a href="/demo/mysettings">Account settings</a></li>
              </ul>
            </li>
        </ul>
        </div>
      </div>
    </nav>

<div class="container">
    <div class="content">

    <!-- SideNav pills -->
        <div class="sidenav col-md-3">
            <ul class="nav nav-pills nav-stacked" style="">
                <li role="presentation" @yield('li1') ><a href="/demo/portal"><span class="glyphicon glyphicon-inbox pull-right"></span>   Upcoming Votes</a></li>
                <li role="presentation" @yield('li2') ><a href="/demo/mypolicy"><span class="glyphicon glyphicon-list-alt pull-right"></span>   My Policy</a></li>
                <li role="presentation" @yield('li3') ><a href="/demo/advocacygroups"><span class="glyphicon glyphicon-flag pull-right"></span>   Advocacy Groups</a></li>
                <li role="presentation" @yield('li4') ><a href="/demo/mysettings"><span class="glyphicon glyphicon-cog pull-right"></span>   My Settings</a></li>
               <li role="presentation" @yield('li5') ><a href="/demo/forums"><span class="glyphicon glyphicon-globe pull-right"></span>   Forums</a></li>
            </ul>
        </div>

        <div class="main col-md-9">
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