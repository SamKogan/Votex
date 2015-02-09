@extends('_portalmaster')

@section('title')
<title>My Policy</title>
@stop


@section('content')
<h1>My Policy</h1>
<hr>
<p>Here you can create your voting policy. A voting policy will automatically align your vote with the Advocacy Groups of your choice. If you wish you can also vote yourself on an issue.<br><br>To create your policy create an ordered list of advocacy groups. In the event that a group has not made a decision on an issue your vote will be pledged to the group just beneath it in your policy list.</p><hr>

<div class="row">
	<div class='col-xs-3'>

		<h4>Board Elections</h4><hr>
		{{ Form::select('fund', array('Votex'), Auth::user()->fund, array('class' => 'form-control'))}}<br>
		<button type="button" class="btn btn-default btn-xs plus" id="more_fields" onclick="add_fields();" value="Add More"><span class="glyphicon glyphicon-plus"></span>Add Group</button>

	</div>

	<div class='col-xs-3'>

	<h4>CEO compensation</h4><hr>
		{{ Form::select('fund', array('Votex'), Auth::user()->fund, array('class' => 'form-control'))}}<br>
		<button type="button" class="btn btn-default btn-xs plus" id="more_fields" onclick="add_fields();" value="Add More"><span class="glyphicon glyphicon-plus"></span>Add Group</button>

	</div>

	<div class='col-xs-3'>

	<h4>Audit committee</h4><hr>
		{{ Form::select('fund', array('Votex'), Auth::user()->fund, array('class' => 'form-control'))}}<br>
		<button type="button" class="btn btn-default btn-xs plus" id="more_fields" onclick="add_fields();" value="Add More"><span class="glyphicon glyphicon-plus"></span>Add Group</button>

	</div>

	<div class='col-xs-3'>

	<h4>Other</h4><hr>
		{{ Form::select('fund', array('Votex'), Auth::user()->fund, array('class' => 'form-control'))}}<br>
		<button type="button" class="btn btn-default btn-xs plus" id="more_fields" onclick="add_fields();" value="Add More"><span class="glyphicon glyphicon-plus"></span>Add Group</button>

	</div>
</div>

<div class="row">
<hr>
<button class="btn btn-primary btn-md disabled plus">
	Update My Policy
</button>

</div>


@stop

@section('li1')
@stop
@section('li2')
class="active"
@stop
@section('li3')
@stop
@section('li4')
@stop