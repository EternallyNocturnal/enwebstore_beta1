



<hr>

@foreach($contacts as $contact)


  {{--BEGIN MODAL LINKS --}}
    <div style="background-color:#700000;border:2px #ffffff solid;padding:30px">
      <div class="row" style="color:#000000;">
          <div class="small-8 columns">
            {{$contact->f_name}} {{$contact->nickname}} {{$contact->l_name}}
          </div>

          

          <div class="small-2 columns">
            <a href="#panel3" style="color:#000000;background-color:#700000;font-size:30px"><i class="fi-camera"></i></a>
          </div>

          <div class="small-2 columns">
            <a href="#" data-reveal-id="editContact_{{$contact->id}}" style="color:#000000;background-color:#700000;font-size:30px" data-reveal><i class="fi-wrench"></i></a>
          </div>

          


      </div>
      
      <div class="row" style="color:#000000">
          <div class="small-2 columns">
            <a href="{{$contact->facebook}}" target="blank" style="color:#000000;background-color:#700000;font-size:30px" target="ipanel1"><i class="fi-social-facebook"></i></a>
          </div>

          <div class="small-2 columns">
            <a href="{{$contact->twitter}}" target="blank"  style="color:#000000;background-color:#700000;font-size:30px"><i class="fi-social-twitter"></i></a>
          </div>

          <div class="small-2 columns">
            <a href="{{$contact->instagram}}" target="blank"  style="color:#000000;background-color:#700000;font-size:30px"><i class="fi-social-instagram"></i></a>
          </div>

          <div class="small-2 columns">
            <a href="{{$contact->website}}" target="blank"  style="color:#000000;background-color:#700000;font-size:30px"><i class="fi-link"></i></a>
          </div>

          <div class="small-2 columns">
            <a href="mailto:{{$contact->email}}" style="color:#000000;background-color:#700000;font-size:30px"><i class="fi-mail"></i></a>
          </div>

          <div class="small-2 columns">
            <a href="tel:{{$contact->phone}}" style="color:#000000;background-color:#700000;font-size:30px"><i class="fi-telephone"></i></a>
          </div>

      </div>


</div>



  {{--END MODAL LINKS --}}




  {{-- BEGIN MODAL CODE --}}

      <div id="editContact_{{$contact->id}}" class="reveal-modal" style="max-width:80%;height:700px;max-height:80%;overflow-y:scroll;background-color:#000000;" data-reveal> 

                              {{View::make('contacts.edit')->with('contact', $contact)}}

        <a class="close-reveal-modal">&#215;</a>


      </div>

      <div id="Modal_{{$contact->id}}" class="reveal-modal" style="height:700px;max-height:80%;overflow-y:scroll;background-color:#000000" data-reveal> 

        <a class="close-reveal-modal">&#215;</a>

      </div>
      
      <div id="infoContact" class="reveal-modal" style="height:700px;max-height:80%;overflow-y:scroll;background-color:#000000" data-reveal> 
        
        <a class="close-reveal-modal">&#215;</a>

        </div>





  {{-- END MODAL CODE --}}







                 


                  
                    
    
            

@endforeach

</table>