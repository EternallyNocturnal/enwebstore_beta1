@extends('layouts.master')

@section('content')
<div style="width:100%:height:100%;">
	<?php $pricetag = 0;?>
	@foreach($wholecarts as $cart)
		<div class="row" style="width:80%;border:1px #ffffff solid;border-radius:35px">
			<div class="small-12 large-9 columns">

				{{$cart->findItemProp('Name')}}<br>
				{{Str::title($cart->size)}}
			</div>


			<div class="small-12 large-3 columns">
				<table style="background-color:transparent;border:transparent"><td>
				<button class="button alert tiny" style="border-radius:30px;">{{$cart->quantity}}<br> ${{substr($cart->checkoutPrice(),0, -2)}}.{{substr($cart->checkoutPrice(),-2)}}</button>
				{{Form::open(array('route' => 'removeFromCart', 'method' => 'post'))}}
				{{Form::hidden('remID', $cart->id)}}
				<td><button type="submit" class="button tiny" style="border-radius:30px;background-color:#700000"><i class="fi fi-x"></i></button><tr>

				</table>
				{{Form::close()}}	
				
			</div>

			<?php $pricetag = $pricetag + $cart->checkoutPrice();?>

		</div>
	@endforeach
</div>

<button class="button secondary">${{substr($pricetag,0,-2)}}.{{substr($pricetag,-2)}}<br> CHECKOUT</button>


@stop














