@extends('layouts.bsadminmaster')



@section('content')

@foreach(Product::all() as $product)
<div class="col-md-3">
<table width="100%" style="background-color:transparent">
	<td 
		data-toggle="collapse"  href="#collapse{{$product->id}}One" aria-expanded="true" aria-controls="collapse{{$product->id}}One">
		<div class="panel-group" id="accordion{{$product->id}}" role="tablist" aria-multiselectable="true">
	  		<div class="panel panel-default" style="border:1px transparent solid;border-radius:95px;padding:15px;color:#000000;">
	    		
	         	 <center>
	        		  <h3 style="font-size:large;color:#000000;">{{$product->name}}</h3>
	        		  <img src="https://www.eternallynocturnal.com/store/public/images/products/{{$product->main_image}}" style="max-height:300px" />
	          	</center>
    	
    	<td><div id="collapse{{$product->id}}One" class="panel-collapse collapse" role="tabpanel">
      <div class="panel-body">

      	<table>
      		{{$errors->first()}}
				
				       		{{View::make('productsadmins.panels.editproduct')->with('product', $product)}}
				       		{{View::make('productsadmins.subpanels.general')->with('product', $product)}}
				       		{{View::make('productsadmins.subpanels.inventory')->with('product', $product)}}
				       		{{View::make('productsadmins.subpanels.images')->with('product', $product)}}
				
   		</table>
     	 </div>
    	</div>
	</div>


	</table>

</div>
@endforeach



@stop
