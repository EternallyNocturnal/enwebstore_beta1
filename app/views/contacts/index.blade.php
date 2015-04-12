	@extends('layouts.bsadminmaster')

	@section('content')

@foreach($contacts as $contact)
<table width="100%" style="background-color:transparent">
	<td>
		<div class="panel-group" id="accordion{{$contact->id}}" role="tablist" aria-multiselectable="true">
	  		<div class="panel panel-default" style="border:1px transparent solid;border-radius:95px;padding:15px;color:#000000;">
	    		
	         	 <center>
	        		  <h3 style="color:#000000;" data-toggle="collapse"  href="#collapse{{$contact->id}}One" aria-expanded="true" aria-controls="collapse{{$contact->id}}One">{{$contact->f_name}} {{$contact->l_name}}</h3>
            		  <table width="40%">
            		  <td><a href="{{$contact->facebook}}" target="blank"><i style="font-size:25px" class="fa fa-facebook-official"></i></a>
            		  <td><a href="{{$contact->twitter}}" target="blank"><i  style="font-size:25px" class="fa fa-twitter"></i></a>
            		  <td><a href="{{$contact->instagram}}" target="blank"><i  style="font-size:25px" class="fa fa-instagram"></i></a>
            		  <td><a href="{{$contact->website}}" target="blank"><i  style="font-size:25px" class="fa fa-globe"></i></a>
            		  <td><a href="mailto:{{$contact->email}}" target="blank" style="font-size:15px;color:#000000;"><i  style="font-size:25px" class="fa fa-envelope"></i> {{$contact->email}}</a>
            		  <td><a href="tel:{{$contact->phone}}" target="blank" style="font-size:15px;color:#000000;"><i  style="font-size:25px" class="fa fa-phone"></i> {{$contact->phone}}</a>
          </div>

  
	          	</center>
    	
    	<td><div id="collapse{{$contact->id}}One" class="panel-collapse collapse" role="tabpanel">
      <div class="panel-body">
      	<table>
      		{{View::make('contacts.panels.editcontacts')->with('contact', $contact)}}
   		</table>
      </div>
    </div>
</div>


	</table>
@endforeach



	@stop