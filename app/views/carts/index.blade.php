@extends('layouts.master')

@section('content')


<div style="width:100%:height:100%;min-height:900px;">
	<?php $pricetag = 0;

	?>
	@foreach($wholecarts as $cart)
		<div class="row" style="width:80%;border:1px #ffffff solid;border-radius:35px;border-left:transparent;border-right:transparent">
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

			<?php $pricetag = $pricetag + $cart->checkoutPrice();

			?>

		</div>


		
	@endforeach

@if($pricetag > 0)
<div style="color:#f0f0f0;font-size:16px">Item total: ${{substr($pricetag,0,-2)}}.{{substr($pricetag,-2)}}</div>

<?php 

	$shipcounter = $wholecarts->sum('quantity');
	if($shipcounter > 1){
		$shipcost = round((($shipcounter / 2) * 599),0);
	}else{
		$shipcost = 599;
	}

	$pricetag = $pricetag + $shipcost;
?>

<div style="color:#f0f0f0;font-size:16px">Shipping total: ${{substr($shipcost,0,-2)}}.{{substr($shipcost,-2)}}</div>

{{Form::open(array('route' => 'checkOut', 'method' => 'post'))}}
{{Form::hidden('checkoutAmt', $pricetag)}}

<button type="submit" style="border-radius:45px" class="button small alert">${{substr($pricetag,0,-2)}}.{{substr($pricetag,-2)}}<br>Check Out</button>

{{Form::close()}}
<br><br>
{{Form::open(array('route' => 'emptyCart', 'method' => 'post'))}}

<button type="submit" class="button tiny" style="border-radius:35px;background-color:#700000">Empty Cart</button>
{{Form::close()}}
</div>
@else
<div style="min-height:800px">
THERE DOESNT SEEM TO BE ANYTHING IN YOUR CARTE! SHOPPE HARDER!

@endif

</div>


@stop














