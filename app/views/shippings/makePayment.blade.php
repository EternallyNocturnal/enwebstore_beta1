@extends('layouts.master')
@section('content')
<?php $checkoutAmt = Session::get('checkoutAmt');
      $customer = Shipping::where('cart_id', Session::get('cart_id'))->first();
?>
<div style="background-color:#000000">
<div class="small-12 large-12 columns">
Please verify the information below or 
{{Form::open(array('route' => 'shippings.edit', 'method' => 'get'))}}
<button type="submit" class="button tiny" style="background-color:#700000;color:#ffffff;border-radius:45px"><b>Go back</b></button>
{{Form::close()}}
if you need to fix something
</div>

<div class="small-12 large-12 columns">
<label style="whiteouttext">Email</label>
{{$customer->email}}
</div>

@if($customer->phone)
<div class="small-12 large-12 columns">
<label style="whiteouttext">Phone</label>
{{$customer->phone}}
</div>
@endif

<div class="small-12 large-12 columns">
<label style="whiteouttext">Name</label>
{{$customer->ship_f_name}} {{$customer->ship_l_name}}
</div>

<div class="small-12 large-12 columns">
<label style="whiteouttext">Street Address</label>
{{$customer->ship_address1}} {{$customer->ship_address2}}
</div>

<div class="small-12 large-12 columns">
<label style="whiteouttext">City/State/Zip</label>
{{$customer->ship_city}} {{$customer->ship_state}}, {{$customer->ship_zip}}
</div>

<div class="small-12 large-12 columns">
<label style="whiteouttext">Total including shipping</label>
${{substr($customer->cart_amt,0,-2)}}.{{substr($customer->cart_amt,-2)}}
</div>


<hr>
  {{Form::open(array('route' => 'processPayment', 'method' => 'post'))}}
	{{Form::hidden('data-description', $checkoutAmt)}}
  <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_W6oEoaW2cMMfY48MU483R4ia"
    data-amount="{{$checkoutAmt}}"
    data-name="Eternally Nocturnal"
    data-description= "${{substr($checkoutAmt,0,-2)}}.{{substr($checkoutAmt,-2)}}"
    data-image="https://www.eternallynocturnal.com/images/blackskull.jpg">
  </script>
  	{{Form::close()}}
</div>
@stop