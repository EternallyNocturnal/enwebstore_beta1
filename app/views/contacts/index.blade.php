	@extends('layouts.bsadminmaster')

	@section('content')

@foreach($contacts as $contact)
<div class="col-md-3">
<table width="100%" style="background-color:transparent">

	<td>
		<div class="panel-group" id="accordion{{$contact->id}}" role="tablist" aria-multiselectable="true">
	  		<div class="panel panel-default" style="border:1px transparent solid;border-radius:95px;padding:15px;color:#000000;">
	    		
	         	 
	         	 	<table width="100%">
	         	 		<center>
	        		  <h4 data-toggle="modal" data-target="#editContact{{$contact->id}}" >{{$contact->f_name}} {{$contact->l_name}}</h4>
	        		  </td>
	        		  </center>
	        		</table width="100%">
	        		 
            		  <table style="color:#000000;width:100%">
            		  	<center>
            		  <td><a href="{{$contact->facebook}}" target="blank"> &nbsp<i style="font-size:25px;color:#000000" class="fa fa-facebook-official"></i></a>
            		  <td><a href="{{$contact->twitter}}" target="blank"><i  style="font-size:25px;color:#000000" class="fa fa-twitter"></i></a>
            		  <td><a href="{{$contact->instagram}}" target="blank"><i  style="font-size:25px;color:#000000" class="fa fa-instagram"></i></a>
            		  <td><a href="{{$contact->website}}" target="blank"><i  style="font-size:25px;color:#000000" class="fa fa-globe"></i></a><tr>
            		  <td colspan="2"><a href="mailto:{{$contact->email}}" target="blank" style="font-size:15px;color:#000000;"><i  style="font-size:25px;color:#000000" class="fa fa-envelope"></i> {{$contact->email}}</a>
            		  <td colspan="2"><a href="tel:{{$contact->phone}}" target="blank" style="font-size:15px;color:#000000;"><i  style="font-size:25px;color:#000000" class="fa fa-phone"></i> {{$contact->phone}}</a>
          			</center>
          			</table>
          			 
          </div>{{View::make('contacts.panels.editcontacts')->with('contact', $contact)}}

  
	          	
    
    		
   		</table>
    </div>
</div>

</div>
	</table>
</div>
@endforeach



	@stop