@extends('layouts.adminmaster')



@section('content')


@foreach($products as $product)



{{--MODAL CODE HERE--}}

	

	{{--NEW PRODUCT CATEGORY--}}

		<div id="showProduct_{{$product->id}}" class="reveal-modal" style="max-height:80%;overflow-y:scroll;background-color:#000000;" data-reveal> 

	                              {{View::make('products.edit')->with('product', $product)}}

	        <a class="close-reveal-modal">&#215;</a>


	      </div>

	{{--END NEW PRODUCT CATEGORY--}}
@endforeach




{{--END MODAL CODE--}}


	<ul class="small-block-grid-2 large-block-grid-3">
		@foreach($products as $product)

		<li> <a href="#" data-reveal-id="showProduct_{{$product->id}}" style="color:#700000;background-color:#000000;font-size:30px">
			  <img src="//localhost/enwebstore_beta1/public/images/products/{{$product->main_image}}" style="max-height:700px" />
		</a>
		<div class="row">
			<div class="small-12 large-12 columns" style="font-size:10px">
				<i>{{Str::title('click to edit details')}}</i>
			</div>
			<div class="small-12 large-12 columns">
			${{$product->price}}
			</div>
		</li>
		@endforeach
	</ul>

	





@stop

