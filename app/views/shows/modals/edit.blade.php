
<div class="modal fade" id="editShow{{$show->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
  <div class="modal-dialog" style="width:100%;max-width:400px;color:#ffffff;background-color:#000000;border-radius:35px;border:2px #ffffff solid;">
    <div class="modal-content" style="background-color:#000000;color:#ffffff;border-radius:35px;">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="editShow{{$show->id}}" style="background-color:#000000;color:#ffffff;border-radius:35px;">Edit {{$show->name}}</h4>
      </div>
      <div class="modal-body" style="background-color:#000000;color:#000000">
 


      		{{View::make('shows.edit')->with('show', $show)}}


   
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        {{Form::close()}}
      </div>
    </div>
  </div>
</div>