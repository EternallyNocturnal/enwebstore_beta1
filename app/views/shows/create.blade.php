	@extends('layouts.bsadminmaster')
	@section('headr')
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	@stop

	@section('content')
			
			

			<div class="createForm" style="color:#000000;background-color:#000000">
				<div class="col-sm-12 col-md-4">
					<label class="whiteouttext"></label>
					{{Form::text('name', '', array('style' => '', 'placeholder' => 'Name'))}}
				</div>
		
				<div class="col-sm-12 col-md-4">
					<label class="whiteouttext"></label>
					<select name="venue_id">
						@foreach(Venue::all() as $venue)
								<option value="$venue->id">{{$venue->name}}</option>
						@endforeach
					</select>
				</div>

				<div class="col-sm-12 col-md-4">
					<label class="whiteouttext"></label>
					<select name="contact_id">
						@foreach(Venue::all() as $venue)
								<option value="$venue->id">{{$venue->name}}</option>
						@endforeach
					</select>
				</div>

			</div>

			
			<input id="starttime" type="text" type="text" class="form-control">

<script>$('#starttime input').datepicker({
});</script>

@stop


@section('footr')

<script src="{{public_path()}}/js/bootstrap-datepicker.min.js"></script>

@stop