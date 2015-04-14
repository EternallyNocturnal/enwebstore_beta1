
<div class="modal fade" id="createContactType" tabindex="-1" role="dialog" aria-labelledby="createContactType" aria-hidden="true" >
  <div class="modal-dialog" style="width:60%;color:#ffffff;background-color:#000000">
    <div class="modal-content" style="background-color:#000000;color:#ffffff">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="createContactType" style="background-color:#000000;color:#ffffff">Create a new Contact</h4>
      </div>
      <div class="modal-body" style="background-color:#000000">
      	<table width="100%" style="color:#000000">


		{{Form::open(array('route' => 'contacttypes.store', 'method' => 'post'))}}
		<label style="color:#ffffff">New Contact Type</label><br>
		{{Form::text('type', '', array('placeholder' => 'Band Member, Photographer, Model, etc.', 'style' => 'color:#000000'))}}


			{{Form::close()}}
		</table>
		</div>
		    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
  </div>
