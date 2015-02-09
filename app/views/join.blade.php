@extends('_homepagemaster')

@section('content')
<div class="votextxtcontainer">

	<div class="row"><p>
		If you agree with our cause and want to return voting rights to shareholders sign our petition or join our mailing list today!<br>
		Click the buttons bellow.</p><br><br><br><br>
	</div>

	<div class="row">
		<div class="center">
			<a class="btn btn-default btn-lg" data-toggle="modal" data-target="#subscribemodal">Join the mailing list</a>
			<a class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal">Sign the petition  <span class="glyphicon glyphicon-pencil"></span></a>
		</div>
	</div>

</div>

<!-- Subscribe mailing list Modal -->
<div class="modal fade subscribe-modal-sm" tabindex="-1" id="subscribemodal" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-center-1">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <h4 class="modal-title" id="myModalLabel">Subscribe</h4>
          </div>
          <div class="modal-body">

            {{ Form::open(array('url' => '/subscribe')) }}

            	Susbcribe to our mailing list. We will send you updates about our project and the state of saver rights.<br><br>

                Email<br>
                {{ Form::text('email') }}<br><br>

                {{ Form::submit('Subscribe', array('class' => 'btn btn-primary btn-md')) }}

            {{ Form::close() }}

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Sign the petition</h4>
      </div>
      <div class="modal-body">
            {{ Form::open(array('url' => '/subscribe')) }}
              <p>
            	I am invested in funds which on my behalf invest in corporations.  I believe I am entitled to have a say in how these corporations are governed.  I want my funds’ proxy votes to reflect the voting instructions I register with Votex.</p><br><br>

                Email:<br>
                {{ Form::text('email') }}<br><br>

                Name:<br>
                {{ Form::text('name') }}<br><br>
                
                Select your fund:<br>
                {{ Form::select('fund', $fund_list)}}<br><br>

                Enter amount invested in fund (approximate):<br>
                {{ Form::text('amount') }}<br><br>

                I agree to sign this petition.
                {{ Form::checkbox('name', 'value') }}<br><br>

                {{ Form::submit('Sign petition', array('class' => 'btn btn-primary btn-md')) }}

            {{ Form::close() }}

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
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