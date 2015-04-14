
{{Form::open(array('route' => 'venues.store', 'method' => 'post', 'files' => 'true'))}}

	<td>
		<label class="whiteouttext">Venue Name</label><br>
		{{Form::text('name', '', array('placeholder' => 'Venue Name'))}}<br>
	

		<label class="whiteouttext">Select a Contact</label><br>
		<select name="contact_id" style="color:#000000;">
			<option value="">Select a contact.</option>
			@foreach(Contact::all() as $contact)
				<option value="{{$contact->id}}">{{$contact->f_name}} <i>{{$contact->nickname}}</i> {{$contact->l_name}}</option>
			@endforeach
		</select><br>
		

	<label class="whiteouttext">Address</label><br>
		{{Form::text('street_1', '', array('placeholder' => 'Address'))}}<br>
	

	<label class="whiteouttext">Address 2</label><br>
		{{Form::text('street_2', '', array('placeholder' => 'Address 2'))}}<br>
	

	<label class="whiteouttext">City</label><br>
		{{Form::text('city', '', array('placeholder' => 'City'))}}<br>
	

	<label class="whiteouttext">State</label><br>
		{{Form::text('state', 'MI', array('placeholder' => 'State'))}}<br>
	

	<label class="whiteouttext">Zip</label><br>
		{{Form::text('zip', '', array('placeholder' => 'Zip'))}}<br>
	

	<td>
		<i  style="font-size:25px;color:#ffffff" class="fa fa-envelope"></i> {{Form::text('email', '', array('placeholder' => 'Venue Email'))}}
		<i  style="font-size:25px;color:#ffffff" class="fa fa-phone"></i> {{Form::text('phone', '', array('placeholder' => 'Venue Phone'))}}<br>
		<i  style="font-size:25px;color:#ffffff" class="fa fa-trash"></i> {{Form::text('fax', '', array('placeholder' => 'Venue Fax'))}}
		<i style="font-size:25px;color:#ffffff" class="fa fa-facebook-official"></i> {{Form::text('facebook', '', array('placeholder' => 'Paste Facebook Link Here'))}}<br>
		<i  style="font-size:25px;color:#ffffff" class="fa fa-twitter"></i> {{Form::text('twitter', '', array('placeholder' => 'Paste Twitter Link Here'))}}
		<i  style="font-size:25px;color:#ffffff" class="fa fa-instagram"></i> {{Form::text('instagram', '', array('placeholder' => 'Paste Instagram Link Here'))}}<br>
		<i  style="font-size:25px;color:#ffffff" class="fa fa-globe"></i> {{Form::text('website', '', array('placeholder' => 'Paste Website Link Here'))}}
	
		<br><br>

		<label style="color:#ffffff">Main Image {{Form::file('image_1')}}</label><br>
		
		<label style="color:#ffffff">Image 2 {{Form::file('image_2')}}</label><br>
		
		<label style="color:#ffffff">Image 3 {{Form::file('image_3')}}</label><br>
		

	

	
