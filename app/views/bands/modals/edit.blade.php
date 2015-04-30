<div class="modal fade"  id="editBand{{$band->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" >
    <div class="modal-content" style="width:100%;max-width:800px;color:#ffffff;background-color:#000000;border-radius:35px;border:2px #ffffff solid;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" class="modal-title" id="#editBand{{$band->id}}" style="background-color:#000000;color:#ffffff;border-radius:35px;">Edit {{$band->name}}</h4>
      
      <div class="modal-body" >
<table>
  
{{Form::model($band, array('method' => 'put', 'files' => 'true', 'route' => array('bands.update', $band->id)))}}
<div style="color:#000000">
<div class="col-sm-12 col-lg-12">
<label class="whiteouttext">Name</label><br>
{{Form::text('name')}}
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
{{Form::text('city')}}
</div>

<div class="col-sm-12 col-lg-6">
<label class="whiteouttext">State</label><br>
{{Form::text('state')}}
</div>

<div class="col-sm-12 col-lg-6">
<label class="whiteouttext">Zip</label><br>
{{Form::text('zip')}}
</div>
<div class="col-sm-12 col-lg-6">
<label class="whiteouttext"><i class="fa fa-envelope"></i></label><br>
{{Form::text('email')}}
</div>

<div class="col-sm-12 col-lg-6">
<label class="whiteouttext"><i class="fa fa-facebook-official"></i></label><br>
{{Form::text('facebook')}}
</div>

<div class="col-sm-12 col-lg-6">
<label class="whiteouttext"><i class="fa fa-twitter"></i></label><br>
{{Form::text('twitter')}}
</div>

<div class="col-sm-12 col-lg-6">
<label class="whiteouttext"><i class="fa fa-instagram"></i></label><br>
{{Form::text('instagram')}}
</div>

<div class="col-sm-12 col-lg-6">
<label class="whiteouttext"><i class="fa fa-linkedin"></i></label><br>
{{Form::text('linkedin')}}
</div>

<div class="col-sm-12 col-lg-6">
<label class="whiteouttext"><i class="fa fa-globe"></i></label><br>
{{Form::text('website')}}
</div>

<div class="col-sm-12 col-lg-12">
<label class="whiteouttext"></label><br>
{{Form::textarea('notes')}}
</div>
</table>
</div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      {{Form::close()}}
      </div>
    </div>
  </div>
  </div>
</div>
