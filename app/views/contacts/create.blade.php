{{ Form::open(array('action' => 'ContactsController@store', 'files' => true)) }}


<div class="row">
		<div class="large-6 columns"><div style="color:#000000">
			<select name="type">
				<option value="">Choose Contact Type..GENERATE FROM LISTTTTTT..</option>
				<option value="ARTIST">Artist</option>
				<option value="PHOTOGRAPHER">Photographer</option>
			</select>

			</div>
		</div>
	<div class="large-6 columns">{{Form::text('nickname', '', array('placeholder' => 'Alias'))}}</div>
</div>


{{Form::hidden('state', 'MI')}}


<div class="row">
	<div class="large-6 columns">{{Form::text('f_name', '', array('placeholder' => 'First Name'))}}</div>
	<div class="large-6 columns">{{Form::text('l_name', '', array('placeholder' => 'Last Name'))}}</div>
</div>


<div class="row">
	<div class="large-6 columns">{{Form::text('street1', '', array('placeholder' => 'Street Address'))}}</div>
	<div class="large-6 columns">{{Form::text('street2', '', array('placeholder' => 'Street Address (apt, ste, etc.)'))}}</div>
</div>


<div class="row">		
	<div class="large-6 columns">{{Form::text('city', '', array('placeholder' => 'City'))}}</div>
	
	<div class="large-3 columns">{{Form::text('state', '', array('placeholder' => 'State'))}}</div>
	<div class="large-3 columns">{{Form::text('zip', '', array('placeholder' => 'Zip Code'))}}</div>
</div>


<div class="row">
	<div class="large-1 columns"><i style="color:#700000;font-size:30px" class="fi-telephone"></i></div>
		<div class="large-5 columns">{{Form::text('phone', '', array('placeholder' => 'XXX-XXX-XXXX'))}}</div>
	<div class="large-1 columns"><i style="color:#700000;font-size:30px" class="fi-mail"></i></div>
		<div class="large-5 columns">{{Form::text('email', '', array('placeholder' => 'E-Mail'))}}</div>
</div>

<div class="row">
	
	<div class="large-1 columns"><i style="color:#700000;font-size:30px" class="fi-social-facebook"></i></span></div>
		<div class="large-5 columns">{{Form::text('facebook', '', array('placeholder' => 'Paste Facebook link here'))}}</div>
	
	<div class="large-1 columns"><i style="color:#700000;font-size:30px" class="fi-social-twitter"></i></div>
		<div class="large-5 columns">{{Form::text('twitter', '', array('placeholder' => 'Paste Twitter link here'))}}</div>
</div>

<div class="row">	
	<div class="large-1 columns"><i style="color:#700000;font-size:30px" class="fi-social-instagram"></i></div>	
		<div class="large-5 columns">{{Form::text('instagram', '', array('placeholder' => 'Paste IG link here'))}}</div>
	<div class="large-1 columns"><i style="color:#700000;font-size:30px" class="fi-link"></i></div>		
		<div class="large-5 columns">{{Form::text('website', '', array('placeholder' => 'Pase Website link here'))}}</div>


</div>

<div class="row">
	{{Form::textarea('notes', '', array('placeholder' => 'Notes', 'style' => 'color:#000000;max-height:180px'))}}
</div>
<br>

<i type="submit"  style="color:#700000;"></i>


<button  class="fi-plus" style="color:#700000;background-color:#000000;font-size:30px;border:1px #ffffff solid;"></button>

{{Form::close()}}

<br><br>

