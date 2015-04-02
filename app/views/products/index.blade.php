@extends('layouts.master')



@section('content')


@foreach($products as $product)



{{--MODAL CODE HERE--}}

	

	{{--NEW PRODUCT CATEGORY--}}

		<div id="showProduct_{{$product->id}}" class="reveal-modal" style="max-width:80%;max-height:80%;overflow-y:scroll;background-color:#000000;" data-reveal> 

	                              {{View::make('products.show')->with('product', $product)}}

	        <a class="close-reveal-modal">&#215;</a>


	      </div>

	{{--END NEW PRODUCT CATEGORY--}}
@endforeach




{{--END MODAL CODE--}}


	<ul class="small-block-grid-2 large-block-grid-3">
		@foreach($products as $product)

	
		
		<li> <a  onclick="window.history.pushState('','', 'products/{{$product->id}}')";href="#" onclick="window.history.pushState('','','bananas/bandanas/{{$product}}');"  data-reveal-id="showProduct_{{$product->id}}" style="color:#700000;background-color:#000000;font-size:30px">
			  <img src="http://www.eternallynocturnal.com/store/public/images/products/{{$product->name}}.jpg" style="max-height:700px" />
		</a>
		<div class="row">
			<div class="small-12 large-12 columns" style="font-size:10px">
				<i>{{Str::title('click for details')}}</i>
			</div>
			<div class="small-12 large-12 columns">
			${{$product->price}}
			</div>
		</li>
		@endforeach
	</ul>

	





@stop

