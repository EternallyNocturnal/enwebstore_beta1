@extends('layouts.bsadminmaster')
	@section('content')

		@foreach(Product::all() as $product)
			<div class="col-sm-6 col-md-4 col-lg-2 btn" data-toggle="collapse"  href="#collapse{{$product->id}}One" aria-expanded="true" aria-controls="collapse{{$product->id}}One">
				{{View::make('productsadmins.subpanels.general')->with('product', $product)}}
				{{View::make('productsadmins.subpanels.inventory')->with('product', $product)}}
				{{View::make('productsadmins.subpanels.images')->with('product', $product)}}
					<div class="panel-group" id="accordion{{$product->id}}" role="tablist" aria-multiselectable="true">
		  				<div class="panel panel-default" style="border:1px transparent solid;border-radius:95px;padding:15px;color:#000000;">
		    		
				         	 <center>
				        		  <h3 style="font-size:large;color:#000000;">{{$product->name}}</h3>
				        		  <img src="https://www.eternallynocturnal.com/store/public/images/products/{{$product->main_image}}" style="max-height:300px" />
				          	</center>
			    		
						    	<div id="collapse{{$product->id}}One" class="panel-collapse collapse" role="tabpanel">
							      	<div class="panel-body" style="background-color:#000000;border-radius:45px">
			      						{{$errors->first()}}
										{{View::make('productsadmins.panels.editproduct')->with('product', $product)}}
						     		</div>
				    			</div>
						</div>
					</div>

		
			</div>
		@endforeach



	@stop
