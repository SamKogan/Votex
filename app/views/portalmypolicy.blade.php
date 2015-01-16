@extends('_portalmaster')

@section('title')
<title>My Policy</title>
@stop


@section('content')
<h1>My Policy</h1>
<hr>
<p>Here you can create your voting policy. A voting policy will automatically align your vote with the Advocacy Groups of your choice. If you wish you can also vote yourself on an issue.<br><br>To create your policy create an ordered list of advocacy groups. In the event that a group has not made a decision on an issue your vote will be pledged to the group just beneath it in your policy list.</p><hr>

<div class='col-xs-2'>
	<table>
		<tr>
			<th>
				<h4>Board Elections</h4>
			</th>
		</tr>
		<tr>
			<td>
				
			</td>
		</tr>
	</table>
</div>

<div class='col-xs-2'><h3>2</h3></div>
<div class='col-xs-2'><h3>3</h3></div>
<div class='col-xs-2'><h3>4</h3></div>
<div class='col-xs-2'><h3>5</h3></div>
<div class='col-xs-2'><h3>6</h3></div>

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