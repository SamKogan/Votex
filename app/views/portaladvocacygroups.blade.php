@extends('_portalmaster')

@section('title')
<title>Advocacy Groups</title>
@stop


@section('content')
<h1><a href="/demo/advocacygroups">Advocacy groups</a></h1>
<hr>

<!-- search and sort by -->
	<div class="row">
		<div class="col-xs-6">
		    <div class="input-group">
		      <input type="text" class="form-control" placeholder="Search for...">
		      <span class="input-group-btn">
		        <button class="btn btn-default" type="button"><i class="glyphicon glyphicon-search"></i></button>
		      </span>
		    </div><!-- /input-group -->
		  </div>
		  
	  	<div class="col-xs-6">
			<div class="btn-group alignright">
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
			    Sort By <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu alignright" role="menu">
			    <li><a href="#">Group name</a></li>
			    <li><a href="#">Date joined</a></li>
			    <li><a href="#">Cause</a></li>
			  </ul>
			 </div>
		 </div>
	 </div>
	 <br>

<?php
	$Advocacygroups = DB::table('Advocacygroups')->get();
?>

@foreach ($Advocacygroups as $group)

<div class="advgroup">
{{ "<a class='advgroup' href= '/demo/portal/advocacygroups/group/id=".$group->id."'>" }} {{ $group->title }}</a><hr>

{{ HTML::image("img/Advocacygroups/$group->img_id.png", '', array('class'=>'adv_group_img')) }}
</div>

@endforeach

@stop

@section('li1')
@stop
@section('li2')
@stop
@section('li3')
class="active"
@stop
@section('li4')
@stop