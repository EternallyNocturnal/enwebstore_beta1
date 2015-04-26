@extends('layouts.bsadminmaster')
	@section('content')

		@foreach(Product::all() as $product)
			<div class="col-sm-6 col-md-4 col-lg-2 btn" >
				
		  				<div class="panel panel-default" style="border:1px transparent solid;border-radius:95px;padding:15px;color:#000000;">
		    		
				         	 <center>
				        		  <a data-toggle="modal" data-target="#ProductDetail{{$product->id}}"><h3 style="font-size:large;color:#000000;">{{$product->name}}</h3></a>
				        		   <a data-toggle="modal" data-target="#ProductDetail{{$product->id}}"><img src="https://www.eternallynocturnal.com/store/public/images/products/{{$product->main_image}}" style="max-height:300px" /></a>
				          	</center>
			    		
<!-- 						    	<div id="collapse{{$product->id}}One" class="panel-collapse collapse" role="tabpanel">
							      	<div class="panel-body" style="background-color:#000000;border-radius:45px">
 -->
				{{View::make('productsadmins.subpanels.general')->with('product', $product)}}
				{{View::make('productsadmins.subpanels.inventory')->with('product', $product)}}
				{{View::make('productsadmins.subpanels.images')->with('product', $product)}}


<div class="modal fade" id="ProductDetail{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="ProductDetail{{$product->id}}" aria-hidden="true" >
  <div class="modal-dialog" style="width:100%;max-width:800px;color:#ffffff;background-color:#000000">
    <div class="modal-content" style="background-color:#000000;color:#ffffff">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="ProductDetail{{$product->id}}" style="background-color:#000000;color:#ffffff">Edit {{$product->name}}</h4>
      </div>
      <div class="modal-body" style="background-color:#000000;color:#000000">


			<div class="panel panel-default" style="border:1px transparent solid;border-radius:45px;color:#000000;background-color:#F0f0f0;">
				<h4  data-toggle="modal" data-target="#editProduct{{$product->id}}" data-dismiss="modal">General Information</h4>
			</div>

			<div class="panel panel-default" style="border:1px transparent solid;border-radius:45px;color:#000000;background-color:#F0f0f0;">     
				<h4 data-toggle="modal" data-target="#editInventory{{$product->id}}" data-dismiss="modal">Inventory</h4>
			</div>

			<div class="panel panel-default" style="border:1px transparent solid;border-radius:45px;color:#000000;background-color:#F0f0f0;">
				<h4 data-toggle="modal" data-target="#editImages{{$product->id}}" data-dismiss="modal">Images</h4>
			</div>




	</div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>


      </div>
    </div>
  </div>
  </div>














										

			</div>
			</div>
		@endforeach



	@stop
