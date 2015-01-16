@extends('_portalmaster')

@section('title')
<title>Advocacy Groups</title>
@stop


@section('content')
<h1>Advocacy groups</h1>
<hr>

<?php
	$Advocacygroups = DB::table('Advocacygroups')->get();
?>

@foreach ($Advocacygroups as $group)
	<table>
		<tr>
			<td colspan='2'><h3>{{$group->title}}</h3></td>
		</tr>
		<tr>
			<td>{{ HTML::image("img/Advocacygroups/$group->img_id.png", '', array('class'=>'adv_group_img')) }}</td>
		    <td>{{$group->description}}</td>
		</tr>
	</table>
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