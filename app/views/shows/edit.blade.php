




	@extends('layouts.bsadminmaster')
	@section('headr')
		<link rel="stylesheet" href="//54.149.181.47/enwebstore_beta1/public/bootstrap-datepicker.min.css">
		<link rel="stylesheet" href="//54.149.181.47/enwebstore_beta1/public/bootstrap-datepicker3.min.css">

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
















			<div class="input-group date">

	<div class="col-md-2">
	  <input type="text" name="startDate" data-provide="datepicker"class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
	  <input type="text" name="Date" data-provide="datepicker"class="form-control"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
	  
	</div>				
</div>

beee
	<div style="margin-top:200px">&nbsp
    
    
</div>



<div></div>
<script>


$('.datepicker').datepicker({
    format: 'mm/dd/yyyy',
    startDate: '-3d'
})









</script>















@stop


@section('footr')

<script src="http://54.149.181.47/enwebstore_beta1/public/js/bootstrap-datepicker.min.js"></script>
<script src="http://54.149.181.47/enwebstore_beta1/public/js/moment.js"></script>

@stop




