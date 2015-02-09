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
        <p class="form-control-static">{{Auth::user()->email}}</p><br>

        Password:<br>
        {{ Form::password('password', array('class' => 'form-control')) }}<br>

        Name:<br>
        {{ Form::text('name', Auth::user()->name, array('class' => 'form-control'))}}<br>

        Select your fund:<br>
        {{ Form::select('fund', $fund_list, Auth::user()->fund, array('class' => 'form-control'))}}<br>

        {{ Form::submit('Save', array('class' => 'btn btn-primary btn-md disabled')) }}

    {{ Form::close() }}
    </div>
    <div class="col-xs-6">
        <p>
            If you are having any issues with your account contact customer support. Just kidding. Nothing works.
        </p>
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