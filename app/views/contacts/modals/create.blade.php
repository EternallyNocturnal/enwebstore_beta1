
<div class="modal fade" id="createContact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog" style="width:60%;color:#ffffff;background-color:#000000">
    <div class="modal-content" style="background-color:#000000;color:#ffffff">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="createContact" style="background-color:#000000;color:#ffffff">Create a new Contact</h4>
      </div>
      <div class="modal-body" style="background-color:#000000">
      	<table width="100%">


{{ Form::open(array('action' => 'ContactsController@store', 'files' => true)) }}
<td>
<label style="#ffffff">Contact Type</label><br></li>
		<div style="color:#000000">
			<select name="type">
				<option value="">Choose Contact Type...</option>
				@foreach(Contacttype::all() as $conttype)
				<option value="{{$conttype->type}}">{{$conttype->type}}</option>
				@endforeach				
			</select><br><a class="btn" data-toggle="modal" data-target="#createContactType">Add Contact Type</a><br>
	{{Form::hidden('state', 'MI')}}

	<label style="color:#ffffff">Alias</label><br>	
	{{Form::text('nickname', '', array('placeholder' => 'Alias'))}}<br>

	<label style="color:#ffffff">First Name</label><br>	
	{{Form::text('f_name', '', array('placeholder' => 'First Name'))}}<br>
	<label style="color:#ffffff">Last Name</label><br>	
	{{Form::text('l_name', '', array('placeholder' => 'Last Name'))}}<br>
	<label style="color:#ffffff">Street Address</label><br>	
	{{Form::text('street1', '', array('placeholder' => 'Street Address'))}}<br>
	<label style="color:#ffffff">Street Address 2</label><br>	
	{{Form::text('street2', '', array('placeholder' => 'apt, ste, etc.'))}}<br>
	<label style="color:#ffffff">City</label><br>	
	{{Form::text('city', '', array('placeholder' => 'City'))}}<br>
	<label style="color:#ffffff">State</label><br>	
	{{Form::text('state', '', array('placeholder' => 'State'))}}<br>
	<label style="color:#ffffff">Zip</label><br>	
	{{Form::text('zip', '', array('placeholder' => 'Zip Code'))}}<br>


<td>


			<div style="color:#000000">
	 		<i style="color:#ffffff;font-size:25px" class="fa fa-phone"></i>
              {{Form::text('phone', '', array('placeholder' => 'XXX-XXX-XXXX'))}}
            <i style="color:#ffffff;font-size:25px" class="fa fa-envelope"></i>
              {{Form::text('email', '', array('placeholder' => 'E-Mail'))}}<br><br>
        
          

        
            <i style="color:#ffffff;font-size:25px" class="fa fa-facebook-official"></i>
              {{Form::text('facebook', '', array('placeholder' => 'Paste Facebook link here'))}}            
            <i style="color:#ffffff;font-size:25px" class="fa fa-twitter"></i>
             {{Form::text('twitter', '', array('placeholder' => 'Paste Twitter link here'))}}<br><br>
         
            <i style="color:#ffffff;font-size:25px" class="fa fa-instagram"></i></a>  
              {{Form::text('instagram', '', array('placeholder' => 'Paste IG link here'))}}
            <i style="color:#ffffff;font-size:25px" class="fa fa-globe"></i></a>    
              {{Form::text('website', '', array('placeholder' => 'Pase Website link here'))}}<br><br>


            <label style="color:#ffffff">Notes</label><br>
            {{Form::textarea('notes', '', array('placeholder' => 'Notes...'))}}<br><br>
</div>
          






    	</table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


{{Form::close()}}