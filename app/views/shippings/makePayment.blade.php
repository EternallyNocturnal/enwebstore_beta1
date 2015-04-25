@extends('layouts.master')
@section('content')
<?php $checkoutAmt = Session::get('checkoutAmt');
      $customer = Shipping::where('cart_id', Session::get('cart_id'))->first();
?>
{{$customer->ship_f_name}}<br>

  {{Form::open(array('route' => 'processPayment', 'method' => 'post'))}}
	{{Form::hidden('data-description', $checkoutAmt)}}
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_W6oEoaW2cMMfY48MU483R4ia"
    data-amount="{{$checkoutAmt}}"
    data-name="Demo Site"
    data-description= "${{substr($checkoutAmt,0,-2)}}.{{substr($checkoutAmt,-2)}}"
    data-image="/128x128.png">
  </script>
  	{{Form::close()}}

@stop