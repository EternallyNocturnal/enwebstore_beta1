<div class="modal fade" id="editVenue{{$venue->id}}" tabindex="-1" role="dialog" aria-labelledby="editvenue{{$venue->id}}" aria-hidden="true" >
  <div class="modal-dialog" style="width:60%;color:#ffffff;background-color:#000000">
    <div class="modal-content" style="background-color:#000000;color:#ffffff">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="editvenue{{$venue->id}}" style="background-color:#000000;color:#ffffff">Edit {{$venue->name}}</h4>
      </div>
      <div class="modal-body" style="background-color:#000000;color:#000000">
        <table width="100%" style="color:#000000">

            {{Form::model($venue, array('method' => 'put', 'route' => array('venues.update', $venue->id)))}}
            <?php $getcon = Contact::where('id', $venue->contact_id)->first();?>
        <td width="30%">           
            <label style="color:#ffffff;">Venue Contact</label><br>
                <select name="contact_id">

                <option value="{{$getcon->id}}">{{$getcon->f_name}} {{$getcon->l_name}}</option>
                
              
	    		
                @foreach(Contact::all() as $contact)
					<option value="{{$contact->id}}">{{$contact->f_name}} {{$contact->l_name}}</option>
				@endforeach
                
                </select><br>




        
            <label style="color:#ffffff;">Street Address</label><br>
            {{Form::text('street1')}}<br>

            <label style="color:#ffffff;">Street Address 2</label><br>
            {{Form::text('street2')}}<br>
          


          
            <label style="color:#ffffff;">City</label><br>
            {{Form::text('city')}}<br>

            
            <label style="color:#ffffff;">State</label><br>
            {{Form::text('state')}}<br>

            <label style="color:#ffffff;">Zip Code</label><br>
            {{Form::text('zip')}}<br><br>

            

<td>  
            
          <i style="color:#ffffff;font-size:25px" class="fa fa-phone"></i></div>
              {{Form::text('phone')}}</div>
            <i style="color:#ffffff;font-size:25px" class="fa fa-envelope"></i></div>
              {{Form::text('email')}}</div><br><br>
        
          

        
            <i style="color:#ffffff;font-size:25px" class="fa fa-facebook-official"></i></div>
              {{Form::text('facebook')}}</div>            
            <i style="color:#ffffff;font-size:25px" class="fa fa-twitter"></i></div>
              {{Form::text('twitter')}}</div><br><br>
         
            <i style="color:#ffffff;font-size:25px" class="fa fa-instagram"></i></a></div>  
              {{Form::text('instagram')}}</div>
            <i style="color:#ffffff;font-size:25px" class="fa fa-globe"></i></a></div>    
              {{Form::text('website')}}</div><br><br>


            <label style="color:#ffffff">Notes</label><br>
            {{Form::textarea('notes', $venue->notes, array('placeholder' => 'Notes...'))}}
           
        <br>
        <br>




      
          
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
</div>
</div>