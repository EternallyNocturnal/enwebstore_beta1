
            {{Form::model($contact, array('method' => 'put', 'route' => array('contacts.update', $contact->id)))}}

  <td width="30%">           
            <label style="color:#ffffff;">Contact Type</label><br>
                <select name="type">
                <option value="{{$contact->type}}"><span style="color:#000000">{{Str::title($contact->type)}}</option>
                <option value="ARTIST">Artist</option>
                <option value="PHOTOGRAPHER">Photographer</option>
                </select><br>

            <label style="color:#ffffff;">Nickname</label><br>
            {{Form::text('nickname')}}<br>
        
            {{Form::hidden('state', 'MI')}}
            <label style="color:#ffffff;">First Name</label><br>
            {{Form::text('f_name')}}<br>
            <label style="color:#ffffff;">Last Name</label><br>
            {{Form::text('l_name')}}<br>
          



        
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
            {{Form::textarea('notes', $contact->notes, array('placeholder' => 'Notes...'))}}
           
        <br>
        <br>
<tr>
        <td colspan="3"><div class="modal-footer">

        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>



      
          {{Form::close()}}
