@foreach(Product::all() as $product)


		{{View::make('productsadmins.modals.editproduct')->with('product', $product)}}

@endforeach