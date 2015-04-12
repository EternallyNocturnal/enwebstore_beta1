


            {{Form::model($contact, array('method' => 'put', 'route' => array('contacts.update', $contact->id)))}}

            

          <div class="row">
            
              <div class="large-6 columns"><label style="background-color:#000000;color:#ffffff;">Contact Type</label><div style="color:#000000">
                <select name="type">
                <option value="{{$contact->type}}"><span style="color:#000000">{{Str::title($contact->type)}}</option>
                <option value="ARTIST">Artist</option>
                <option value="PHOTOGRAPHER">Photographer</option>
                </select>

                </div>
              </div>
            <div class="large-6 columns"><label style="background-color:#000000;color:#ffffff;">Nickname</label>{{Form::text('nickname')}}</div>
          </div>


          {{Form::hidden('state', 'MI')}}


          <div class="row">
            <div class="large-6 columns"><label style="background-color:#000000;color:#ffffff;">First Name</label>{{Form::text('f_name')}}</div>
            <div class="large-6 columns"><label style="background-color:#000000;color:#ffffff;">Last Name</label>{{Form::text('l_name')}}</div>
          </div>




          <div class="row">
            <div class="large-6 columns"><label style="background-color:#000000;color:#ffffff;">Street Address</label>{{Form::text('street1')}}</div>
            <div class="large-6 columns"><label style="background-color:#000000;color:#ffffff;">Street Address 2</label>{{Form::text('street2')}}</div>
          </div>


          <div class="row">   
            <div class="large-6 columns"><label style="background-color:#000000;color:#ffffff;">City</label>{{Form::text('city')}}</div>
            
            <div class="large-3 columns"><label style="background-color:#000000;color:#ffffff;">State</label>{{Form::text('state')}}</div>
            <div class="large-3 columns"><label style="background-color:#000000;color:#ffffff;">Zip Code</label>{{Form::text('zip')}}</div>
          </div>


          <div class="row">
            <div class="large-1 columns"><i style="color:#700000;font-size:30px" class="fi-telephone"></i></div>
              <div class="large-5 columns">{{Form::text('phone')}}</div>
            <div class="large-1 columns"><i style="color:#700000;font-size:30px" class="fi-mail"></i></div>
              <div class="large-5 columns">{{Form::text('email')}}</div>
          </div>


          <div class="row">
            
            <div class="large-1 columns"><i style="color:#700000;font-size:30px" class="fi-social-facebook"></i></div>
              <div class="large-5 columns">{{Form::text('facebook')}}</div>
            
            <div class="large-1 columns"><i style="color:#700000;font-size:30px" class="fi-social-twitter"></i></div>
              <div class="large-5 columns">{{Form::text('twitter')}}</div>
          </div>

          <div class="row"> 
            <div class="large-1 columns"><i style="color:#700000;font-size:30px" class="fi-social-instagram"></i></a></div>  
              <div class="large-5 columns">{{Form::text('instagram')}}</div>
            <div class="large-1 columns"><i style="color:#700000;font-size:30px" class="fi-link"></i></a></div>    
              <div class="large-5 columns">{{Form::text('website')}}</div>


          </div>

          <div class="row" style=" width:80%;">
            <center style="color:#000000;">
            {{Form::textarea('notes', $contact->notes, array('placeholder' => 'Notes...'))}}
            </center>
          </div>
          <br>


          <button type="submit" style="color:#700000;background-color:#000000;font-size:20px"><i class="fi-play-circle"></i> Update {{$contact->f_name}} {{$contact->l_name}}</button>

          {{Form::close()}}
