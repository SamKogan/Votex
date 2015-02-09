@extends('_portalmaster')

@section('title')
<title>Advocacy Groups</title>
@stop


@section('content')
<h1><a href="/demo/advocacygroups">Advocacy groups</a>&nbsp;>&nbsp;<h3 >{{$group->title}}</h3><hr></h1>

<div class="row">

	<div class="col-xs-3">
		{{ HTML::image("img/Advocacygroups/$group->img_id.png", '', array('style'=>'width: 200px; height: auto; margin-left: auto; margin-right: auto; display: block;')) }}
	</div>

	<div class="col-xs-9">
		<p>
			<h5>Description:</h5>
			{{$group->description}}
		</p>
	</div>

</div>
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