
    <style>
		.whiteouttext{
			color:#ffffff;
		}
		.blackte{
			color:#000000;
		}
	</style>
		<div class="blackte">
            {{Form::model($show, array('method' => 'put', 'files' => 'true', 'route' => array('shows.update', $show->id)))}}
     		<div class="col-sm-12 col-md-12">
	            <label style="color:#ffffff;">Name</label><br>
	            {{Form::text('name')}}
        	</div>
     		
     		<div class="col-sm-12 col-md-12">
            <label style="color:#ffffff;">Contact</label><br>
            	<select name="contact_id">

	            	@foreach(Contact::where('id', $show->contact_id)->get() as $contact)
	            		<option value="{{$contact->id}}">{{$contact->nickname}} {{$contact->f_name}} {{$contact->l_name}}</option>
	            	@endforeach

	            	@foreach(Contact::all() as $contact)
	           		 	<option value="{{$contact->id}}">{{$contact->nickname}} {{$contact->f_name}} {{$contact->l_name}}</option>
	            	@endforeach
	           	</select>
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
				<label class="whiteouttext">Online/presale Price</label><br>
				{{Form::text('presale_price')}}
			</div>

			<div class="col-sm-12 col-md-12">
				<label class="whiteouttext">Presale Ticket Quantity</label><br>
				{{Form::text('presale_count')}}
			</div>
	
			<div class="col-sm-12 col-md-12">
				<label class="whiteouttext">Door Price</label><br>
				{{Form::text('door_price')}}
			</div>
	

			<div class="col-sm-12 col-md-12">
				<label class="whiteouttext">Start Time</label><br>
				<input name="start_time" id="datetimepicker_1_{{$show->id}}" type="text" value="{{$show->start_time}}">
			</div>

			<div class="col-sm-12 col-md-12">
				<label class="whiteouttext">End Time</label><br>
				<input name="end_time" id="datetimepicker_2_{{$show->id}}" type="text" value="{{$show->end_time}}">
			</div>

			<div class="small-12 columns">
					<label>Poster Image</label>
					{{Form::file('main_image')}}
				</div>
			</div>

		    @foreach(range(1,2) as $datetimepicker)
		      <script language="javascript">
		      jQuery("#datetimepicker_{{$datetimepicker}}_{{$show->id}}").datetimepicker(
		      	{theme:'dark',
		        	 format:'Y-m-d H:i:s',
		        	 step:15,
		         	 inline:true
		        });
		      </script>
		    @endforeach
		</div>