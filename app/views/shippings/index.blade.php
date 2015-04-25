F:\PHP\htdocs\enwebstore_beta1\app/views/shippings/index.blade.php


@foreach($shippings as $shipping)
{{$shipping->email}}
@endforeach

@foreach(Cart::where('customer_id', 'bqDsn0BjWOmhS2rMykiPPqtG2lXMD1qdbDQ49cXDRyo4TyYhtu')->get() as $cart)
{{$cart}}

@endforeach