		@foreach(Imager::where('product_id', $product->id)->get() as $imgs)
			<img src="https:://www.eternallynocturnal.com/store/public/images/products/{{$imgs->name}}" style="max-height:100px" />
		@endforeach
