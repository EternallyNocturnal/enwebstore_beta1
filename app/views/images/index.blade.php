@extends('layouts.adminmaster')

@section('content')
<div class="row">
	

<ul class="small-block-grid-2 large-block-grid-3 columns">
	@foreach(Product::all() as $product)
<li style="border:1px #ffffff solid;">

{{$product->name}} <br><img src="https://www.eternallynocturnal.com/store/public/thumbs/products/{{$product->name}}.jpg"><br>
	{{Form::open(array('route' => 'storeImage', 'method' => 'post', 'files' => 'true'))}}
	
			{{Form::hidden('product_id', $product->id)}}

				{{Form::file('image')}}
	


	
				<button style="color:#700000;background-color:#000000;font-size:30px"><i class="fi-plus"></i> New Image </button>
		
		{{Form::close()}}
</li>
@endforeach
</ul>
</div>
@stop