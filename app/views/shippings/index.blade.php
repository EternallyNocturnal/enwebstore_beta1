@extends('layouts.master')
@section('content')
<?php $cart = 'KrPwbW7jdXujol9If0UlSo0PPZfNcVC1ihq4FTNf';?>

<table width="100%">

	<th>Item</th>
	<th>Quantity</th>
	<th>Size</th><tr>
@foreach(Cart::where('customer_id', $cart)->get() as $items)
	


<td>{{$items->findItemProp('Name')}}	
<td>{{$items->quantity}}
<td>{{$items->size}}
<tr>
	
	
	
	

@endforeach

</table>

@stop