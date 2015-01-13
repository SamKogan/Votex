@extends('_portalmaster')

@section('title')
<title>Advocacy Groups</title>
@stop


@section('content')
<h1>Advocacy groups</h1>
<hr>
<?php
	$Advocacygroups = DB::table('Advocacygroups')->get();

	foreach ($Advocacygroups as $group) {
		echo "<table>";
		echo "<tr>";
		echo "<td colspan='2'>"."<h3>".$group->title."</h3>"."</td>"."</tr>";
		echo "<tr>"."<td>"."<img src='img/Advocacygroups/".$group->img_id.".png' class='adv_group_img'>"."</td>";
	    echo "<td>".$group->description."</td>"."</tr>";
	    echo "</table>";
	}
?>
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