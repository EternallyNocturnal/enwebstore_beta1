
<div class="modal fade" id="createShow" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog" style="width:30%;color:#ffffff;background-color:#000000;border-radius:35px;border:2px #ffffff solid;">
    <div class="modal-content" style="background-color:#000000;color:#ffffff;border-radius:35px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="createShow" style="background-color:#000000;color:#ffffff;border-radius:35px;">Create a New Show</h4>
      </div>
      <div class="modal-body" style="background-color:#000000">
      	<table style="border-radius:35px;width:100%">


      		{{View::make('shows.create')}}


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