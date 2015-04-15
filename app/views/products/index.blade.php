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
		
	</ul>

	





@stop

