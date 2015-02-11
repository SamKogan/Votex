<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Votex</title>

    {{HTML::style('css/stylish-portfolio.css')}}
    {{HTML::style('css/bootstrap.css')}}

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

</head>


<body class="homepage">

<!-- Header -->
<div class="container">
	<div class="content">
		<div class="transbox">

			{{ HTML::image('img/votex.png', '', array('class'=>'votexlogo')) }}

		    <div class="sidenav2 col-md-3">
		        <ul class="nav nav-pills nav-stacked" style="">
		            <li role="presentation" @yield('li1') ><a href="/">About Votex</a></li>
		            <li role="presentation" @yield('li2') ><a href="/join">Join Us</a></li>
		            <li role="presentation" @yield('li3') ><a href="/contact">Contact Us</a></li>
		            <li role="presentation" @yield('li4') ><a href="/demo">Votex Demo <i class="fa fa-sign-in"></i></a></li>
		        </ul>
		    </div>

		    <div class="col-md-9" style="height: 470px">
		    	@yield('content')
		    </div>  
		</div>
	</div>
</div>


<!-- jQuery -->
{{HTML::script('js/jquery.js')}}

<!-- Bootstrap js -->
{{HTML::script('js/bootstrap.min.js')}}

</body>

</html>