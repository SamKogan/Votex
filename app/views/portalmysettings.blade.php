@extends('_portalmaster')

@section('title')
<title>Settings</title>
@stop


@section('content')
<h1>Settings</h1>
<hr>
    {{ Form::open(array('url' => '/updatesettings')) }}

        Email:<br>
        {{ Form::text('email') }}<br><br>

        Password:<br>
        {{ Form::password('password') }}<br><br>

        Name:<br>
        {{ Form::text('name') }}<br><br>

        Select your fund:<br>
        {{ Form::select('fund', $fund_list)}}<br><br>

        {{ Form::submit('Save', array('class' => 'btn btn-primary btn-md')) }}

    {{ Form::close() }}
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