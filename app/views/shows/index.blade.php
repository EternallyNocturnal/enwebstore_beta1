@extends('layouts.bsadminmaster')
@section('content')

@foreach($shows as $show)
<div class="col-md-3">
<table width="100%" style="background-color:transparent">

	<td>
		<div class="panel-group" id="accordion{{$show->id}}" role="tablist" aria-multiselectable="true">
	  		<div class="panel panel-default" style="border:1px transparent solid;border-radius:95px;padding:15px;color:#000000;">
	    		
	         	 
	         	 	<table width="100%">
	         	 		<center>
	        		  <h4 data-toggle="modal" data-target="#editVenue{{$show->id}}" >{{$show->name}}</h4>
	        			<img src="//localhost/enwebstore_beta1/public/images/products/{{$show->main_image}}" height="200px">
	        		  </td>
	        		  </center>
	        		</table width="100%">
	        		 
            		  <table style="color:#000000;width:100%">
            		  	<center>
            		  <td><h3>{{Carbon::parse($show->start_time)->format('l F d')}}<br>
            		  		From {{Carbon::parse($show->start_time)->format('h:i A')}}
            		  		until {{Carbon::parse($show->end_time)->format('h:i A')}} </h3>
            		</center>
          			</table>
          			 
          </div> 

  
	          	
    
    		
   		</table>
    </div>
</div>

</div>
	</table>
</div>
@endforeach



	@stop