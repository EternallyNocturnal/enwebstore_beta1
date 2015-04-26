@extends('layouts.master')

@section('content')


<h2>{{$errors->first()}}</h2>
{{Form::model($shipping, array('method' => 'put', 'route' => array('shippings.update', $shipping->cart_id)))}}
<div style="background-color:#000000;width:100%;max-width:700px;height:100%;min-height:800px;">

	<div class="small-12 large-12 columns">
		<div class="small-12 large-6 columns">

		<label style="color:#ffffff">Email Address*</label>
		{{Form::text('email')}}


		</div>

		<div class="small-12 large-6 columns">
		<label style="color:#ffffff">Phone</label>
		{{Form::text('phone')}}
	</div>



	
	
	<div class="small-12 large-6 columns">
		<label style="color:#ffffff">First Name*</label>
		{{Form::text('ship_f_name')}}
	</div>
	<div class="small-12 large-6 columns">
		<label style="color:#ffffff">Last Name*</label>
		{{Form::text('ship_l_name')}}
	</div>

	<div class="small-12 large-6 columns">
		<label style="color:#ffffff">Address*</label>
		{{Form::text('ship_address1')}}
	</div>

	<div class="small-12 large-6 columns">
		<label style="color:#ffffff">Address 2</label>
		{{Form::text('ship_address2')}}
	</div>

	<div class="small-12 large-6 columns">
		<label style="color:#ffffff">City*</label>
		{{Form::text('ship_city')}}
	</div>

	<div class="small-12 large-3 columns" style="color:#000000">
		<label style="color:#ffffff">State*</label>
		{{Form::text('ship_state')}}
	</div>

	<div class="small-12 large-3 columns">
		<label style="color:#ffffff">Zip*</label>
		{{Form::text('ship_zip')}}
	</div>
<br><br>
<div class="row">
@if(Session::get('checkoutAmt'))
{{Form::hidden('cart_id', Session::get('cart_id'))}}
{{Form::hidden('cart_amt', Session::get('checkoutAmt'))}}
<h2 style="color:#ffffff">Total with shipping: ${{substr(Session::get('checkoutAmt'),0,-2)}}.{{substr(Session::get('checkoutAmt'),-2)}}</h2>
@endif


<button type="submit" style="border-radius:45px" class="button small">Check Out</button>
{{Form::close()}}

</div>

</center>

@stop