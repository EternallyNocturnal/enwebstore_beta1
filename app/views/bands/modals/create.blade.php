<div class="modal fade" id="createBand" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog" style="width:60%;color:#ffffff;background-color:#000000;border-radius:35px;border:2px #ffffff solid;">
    <div class="modal-content" style="background-color:#000000;color:#ffffff;border-radius:35px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="createBand" style="background-color:#000000;color:#ffffff;border-radius:35px;">Create a New Band</h4>
      </div>
<table>
<div style="color:#000000">
{{Form::open(array('route' => 'bands.store', 'method' => 'post', 'files' => 'true'))}}

<div class="col-sm-12 col-lg-12">
<label class="whiteouttext">Name</label><br>
{{Form::text('name', '', array('placeholder' => 'Band Name'))}}
</div>

<div class="col-sm-12 col-lg-6">
<label class="whiteouttext">Contact</label><br>
<select name="contact_id">
	<option value="">Select a contact...</option>
	@foreach(Contact::get() as $contact)
	<option value="{{$contact->id}}">{{$contact->f_name}} {{$contact->l_name}}</option>
	@endforeach
</select>
</div>

<div class="col-sm-12 col-lg-6">
<label class="whiteouttext">City</label><br>
{{Form::text('city', '', array('placeholder' => 'City'))}}
</div>

<div class="col-sm-12 col-lg-6">
<label class="whiteouttext">State</label><br>
{{Form::text('state', '', array('placeholder' => 'State'))}}
</div>

<div class="col-sm-12 col-lg-6">
<label class="whiteouttext">Zip</label><br>
{{Form::text('zip', '', array('placeholder' => 'Zip'))}}
</div>
<div class="col-sm-12 col-lg-6">
<label class="whiteouttext"><i class="fa fa-envelope"></i></label><br>
{{Form::text('email', '', array('placeholder' => 'E-Mail'))}}
</div>


<div class="col-sm-12 col-lg-6">
<label class="whiteouttext"><i class="fa fa-phone"></i></label><br>
{{Form::text('phone', '', array('placeholder' => 'Phone'))}}
</div>

<div class="col-sm-12 col-lg-6">
<label class="whiteouttext"><i class="fa fa-facebook-official"></i></label><br>
{{Form::text('facebook', '', array('placeholder' => 'Facebook URL'))}}
</div>

<div class="col-sm-12 col-lg-6">
<label class="whiteouttext"><i class="fa fa-twitter"></i></label><br>
{{Form::text('twitter', '', array('placeholder' => 'Twitter URL'))}}
</div>

<div class="col-sm-12 col-lg-6">
<label class="whiteouttext"><i class="fa fa-instagram"></i></label><br>
{{Form::text('instagram', '', array('placeholder' => 'Instagram URL'))}}
</div>

<div class="col-sm-12 col-lg-6">
<label class="whiteouttext"><i class="fa fa-linkedin"></i></label><br>
{{Form::text('linkedin', '', array('placeholder' => 'Linkedin URL'))}}
</div>

<div class="col-sm-12 col-lg-6">
<label class="whiteouttext"><i class="fa fa-globe"></i></label><br>
{{Form::text('website', '', array('placeholder' => 'Website URL'))}}
</div>

<div class="col-sm-12 col-lg-6">
<label class="whiteouttext"></label><br>
{{Form::textarea('notes', '', array('placeholder' => 'Notes'))}}
</div>

</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
</table>
        
  {{Form::close()}}

      </div>
    </div>
  </div>
</div>
</div>

