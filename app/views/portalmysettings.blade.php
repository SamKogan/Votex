@extends('_portalmaster')

@section('title')
<title>Settings</title>
@stop


@section('content')
<h1>Settings</h1>
<hr>
	<div class="col-xs-6">
    {{ Form::open(array('url' => '/updatesettings')) }}

        Email:<br>
        {{ Form::text('email', Auth::user()->email, array('class' => 'form-control')) }}<br>

        Password:<br>
        {{ Form::password('password', array('class' => 'form-control')) }}<br>

        Name:<br>
        {{ Form::text('name', Auth::user()->name, array('class' => 'form-control'))}}<br>

        Select your fund:<br>
        {{ Form::select('fund', $fund_list, Auth::user()->fund, array('class' => 'form-control'))}}<br>

        {{ Form::submit('Save', array('class' => 'btn btn-primary btn-md disabled')) }}

    {{ Form::close() }}
    </div>
@stop

@section('li1')
@stop
@section('li2')
@stop
@section('li3')
@stop
@section('li4')
class="active"
@stop