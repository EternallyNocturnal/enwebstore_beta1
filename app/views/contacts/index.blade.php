	@extends('layouts.bsadminmaster')

	@section('content')

@foreach($contacts as $contact)
<table width="100%" style="background-color:transparent">

	<td>
		<div class="panel-group" id="accordion{{$contact->id}}" role="tablist" aria-multiselectable="true">
	  		<div class="panel panel-default" style="border:1px transparent solid;border-radius:95px;padding:15px;color:#000000;">
	    		
	         	 
	         	 	<table width="100%">
	         	 		<center>
	        		  <td style="color:#000000;" data-toggle="collapse"  href="#collapse{{$contact->id}}One" aria-expanded="true" aria-controls="collapse{{$contact->id}}One"><h3>{{$contact->f_name}} {{$contact->l_name}}</h3>
	        		  </td>
	        		  </center>
	        		</table width="100%">
	        		 
            		  <table style="background-color:#000000;width:100%">
            		  	<center>
            		  <td><a href="{{$contact->facebook}}" target="blank"> &nbsp<i style="font-size:25px;color:#ffffff" class="fa fa-facebook-official"></i></a>
            		  <td><a href="{{$contact->twitter}}" target="blank"><i  style="font-size:25px;color:#ffffff" class="fa fa-twitter"></i></a>
            		  <td><a href="{{$contact->instagram}}" target="blank"><i  style="font-size:25px;color:#ffffff" class="fa fa-instagram"></i></a>
            		  <td><a href="{{$contact->website}}" target="blank"><i  style="font-size:25px;color:#ffffff" class="fa fa-globe"></i></a>
            		  <td><a href="mailto:{{$contact->email}}" target="blank" style="font-size:15px;color:#ffffff;"><i  style="font-size:25px;color:#ffffff" class="fa fa-envelope"></i> {{$contact->email}}</a>
            		  <td><a href="tel:{{$contact->phone}}" target="blank" style="font-size:15px;color:#ffffff;"><i  style="font-size:25px;color:#ffffff" class="fa fa-phone"></i> {{$contact->phone}}</a>
          			</center>
          			</table>
          			 
          </div>

  
	          	
    	
    	<td>
    		<div id="collapse{{$contact->id}}One" class="panel-collapse collapse" role="tabpanel">
     	<table style="text-align:left;width:100%;color:#000000;background-color:#000000;border-radius:35px;padding:30px">
     	 <div class="panel-body">
      	<td width="10%"></td>
      		{{View::make('contacts.panels.editcontacts')->with('contact', $contact)}}
      	</div>
   		</table>
    </div>
</div>


	</table>
@endforeach



	@stop