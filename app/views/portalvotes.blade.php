@extends('_portalmaster')


@section('title')
	<title>Votes</title>
@stop


@section('content')

	<h1>Upcoming Votes</h1><hr>
	<div class="btn-group alignright">
	  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
	    Sort By <span class="caret"></span>
	  </button>
	  <ul class="dropdown-menu alignright" role="menu">
	    <li><a href="#">Date (newest)</a></li>
	    <li><a href="#">Date (oldest)</a></li>
	    <li><a href="#">Company</a></li>
	  </ul>
	  </div><br>

	<table class="table">
		<tr>
			<th>Title</th>
			<th>Ticker</th>
			<th>Date</th>
		</tr>

	<?php
		$votes = DB::table('votes')->get();

		foreach ($votes as $vote) {
		    echo "<tr>"."<td>"."<a href='/portal/vote/id=?".$vote->id."'>".$vote->title."</a>"."</td>";
		    echo "<td>".$vote->ticker."</td>";
		    echo "<td>".$vote->exec_date."</td>"."</tr>";
		}
		echo "</table>";
	?>


@stop

@section('li1')
	class="active"
@stop
@section('li2')
@stop
@section('li3')
@stop
@section('li4')
@stop