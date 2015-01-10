<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Votex</title>

    {{HTML::style('css/stylish-portfolio.css')}}
    {{HTML::style('css/bootstrap.css')}}

    <!-- Custom Fonts -->
    <link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

</head>


<body>

<!-- Check for Flash Messages -->
@if(Session::get('flash_message'))
      <? //echo Session::get('flash_message') ?>
@endif

<!-- Header -->
<header id="top" class="header">
    <div class="text-vertical-center">
        <h1><img class="logo" src="img/votex.png"></h1>
        <h4>Investors' voice.</h4>
        <br>
        <button type="button" data-toggle="modal" data-target=".sign-in-modal-sm" class="btn btn-success btn-lg">Sign in <i class="fa fa-sign-in"></i></button>
        <button type="button" data-toggle="modal" data-target=".sign-up-modal-sm" class="btn btn-primary btn-lg">Create account</button>
    </div>
</header>

<!-- Sign in Modal -->
<div class="modal fade sign-in-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-center-1">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Sign into Votex</h4>
          </div>
          <div class="modal-body">

            {{ Form::open(array('url' => '/signin')) }}

                Email<br>
                {{ Form::text('email') }}<br><br>

                Password:<br>
                {{ Form::password('password') }}<br><br>

                {{ Form::submit('Sign in', array('class' => 'btn btn-primary btn-md')) }}

            {{ Form::close() }}

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>

<!-- Sign Up Modal -->
<div class="modal fade sign-up-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-center-2">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Create Votex account</h4>
          </div>
          <div class="modal-body">

            {{ Form::open(array('url' => '/signup')) }}

                Email:<br>
                {{ Form::text('email') }}<br><br>

                Password:<br>
                {{ Form::password('password') }}<br><br>

                Name:<br>
                {{ Form::text('name') }}<br><br>

                Select your fund:<br>
                {{ Form::select('fund', $fund_list)}}<br><br>

                {{ Form::submit('Sign up', array('class' => 'btn btn-primary btn-md')) }}

            {{ Form::close() }}

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
