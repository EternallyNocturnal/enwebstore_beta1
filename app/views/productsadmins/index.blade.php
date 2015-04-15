@extends('layouts.bsadminmaster')



@section('content')

@foreach(Product::all() as $product)
<div class="col-md-4">
<table width="100%" style="background-color:transparent">
	<td 
		data-toggle="collapse"  href="#collapse{{$product->id}}One" aria-expanded="true" aria-controls="collapse{{$product->id}}One">
		<div class="panel-group" id="accordion{{$product->id}}" role="tablist" aria-multiselectable="true">
	  		<div class="panel panel-default" style="border:1px transparent solid;border-radius:95px;padding:15px;color:#000000;">
	    		
	         	 <center>
	        		  <h3 style="color:#000000;">{{$product->name}}</h3>
	        		  <img src="https://www.eternallynocturnal.com/store/public/products/{{$product->main_image}}" style="max-height:100px" />
	          	</center>
    	
    	<td><div id="collapse{{$product->id}}One" class="panel-collapse collapse" role="tabpanel">
      <div class="panel-body">

      	<table>
      		{{$errors->first()}}
				{{Form::model($product, array('method' => 'put', 'files' => 'true', 'route' => array('updateProducts', $product->id)))}}
				       		{{View::make('productsadmins.panels.editproduct')->with('product', $product)}}
				       		{{View::make('productsadmins.subpanels.general')->with('product', $product)}}
				       		{{View::make('productsadmins.subpanels.inventory')->with('product', $product)}}
				       		{{View::make('productsadmins.subpanels.images')->with('product', $product)}}
				{{Form::close()}}
   		</table>
     	 </div>
    	</div>
	</div>


	</table>

</div>
@endforeach



@stop
