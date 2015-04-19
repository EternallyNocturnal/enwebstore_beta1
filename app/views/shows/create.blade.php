
	<script src="http://localhost/enwebstore_beta1/public/calendar/jquery.js"></script>
	<script src="http://localhost/enwebstore_beta1/public/calendar/jquery.datetimepicker.js"></script>
	<link rel="stylesheet" href="//localhost/enwebstore_beta1/public/calendar/jquery.datetimepicker.css">


	<style>
		.whiteouttext{
			color:#ffffff;
		}
	</style>
		{{Form::open(array('route' => 'shows.store', 'method' => 'post', 'files' => 'true'))}}
		<div class="createForm" style="color:#000000;background-color:#000000">
			
			<div class="col-sm-12 col-md-12">
				<label class="whiteouttext">Show Name</label><br>
				{{Form::text('name', '', array('style' => '', 'placeholder' => 'Name'))}}
			</div>
	
			<div class="col-sm-12 col-md-12">
				<label class="whiteouttext">Venue</label><br>
				<select name="venue_id">
					@foreach(Venue::all() as $venue)
							<option value="{{$venue->id}}">{{$venue->name}}</option>
					@endforeach
				</select>
			</div>

			<div class="col-sm-12 col-md-12">
				<label class="whiteouttext">Contact</label><br>
				<select name="contact_id">
					@foreach(Contact::all() as $contact)
							<option value="{{$contact->id}}">@if($contact->nickname){{$contact->nickname}}@endif {{$contact->f_name}} {{$contact->l_name}}</option>
					@endforeach
					
				</select>
			</div>

			<div class="col-sm-12 col-md-12">
				<label class="whiteouttext">Online/presale Price</label><br>
				{{Form::text('presale_price', '', array('style' => '', 'placeholder' => 'Presale Price'))}}
			</div>

			<div class="col-sm-12 col-md-12">
				<label class="whiteouttext">Presale Ticket Quantity</label><br>
				{{Form::text('presale_count', '', array('style' => '', 'placeholder' => 'Presale Quantity'))}}
			</div>
	
			<div class="col-sm-12 col-md-12">
				<label class="whiteouttext">Door Price</label><br>
				{{Form::text('door_price', '', array('style' => '', 'placeholder' => 'Door Price'))}}
			</div>
	

			<div class="col-sm-12 col-md-12">
				<label class="whiteouttext">Start Time</label><br>
				<input name="start_time" id="datetimepicker_1" type="text" >
			</div>

			<div class="col-sm-12 col-md-12">
				<label class="whiteouttext">End Time</label><br>
				<input name="end_time" id="datetimepicker_2" type="text" >
			</div>

			<div class="small-12 columns">
					<label>Poster Image</label>
					{{Form::file('main_image')}}
				</div>
			</div>

		    @foreach(range(1,2) as $datetimepicker)
		      <script language="javascript">
		      jQuery("#datetimepicker_{{$datetimepicker}}").datetimepicker(
		      	{theme:'dark',
		        	 format:'Y-m-d H:i:s',
		        	 step:15,
		         	 inline:true
		        });


		      object.addEventListener("myScript", getcap);
		      </script>


    		@endforeach







