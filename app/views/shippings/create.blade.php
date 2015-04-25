@extends('layouts.master')

@section('content')


<h2>{{$errors->first()}}</h2>
{{Form::open(array('route' => 'shippings.store', 'method' => 'post'))}}
<div style="background-color:#000000;width:100%;max-width:700px;height:100%;min-height:800px;">

	<div class="small-12 large-12 columns">
		<div class="small-12 large-6 columns">

		<label style="color:#ffffff">Email Address*</label>
		{{Form::text('email', '', array('placeholder' => 'Email'))}}


		</div>

		<div class="small-12 large-6 columns">
		<label style="color:#ffffff">Phone</label>
		{{Form::text('phone', '', array('placeholder' => 'Phone Number'))}}
	</div>



	
	
	<div class="small-12 large-6 columns">
		<label style="color:#ffffff">First Name*</label>
		{{Form::text('ship_f_name', '', array('placeholder' => 'First Name'))}}
	</div>
	<div class="small-12 large-6 columns">
		<label style="color:#ffffff">Last Name*</label>
		{{Form::text('ship_l_name', '', array('placeholder' => 'Last Name'))}}
	</div>

	<div class="small-12 large-6 columns">
		<label style="color:#ffffff">Address*</label>
		{{Form::text('ship_address1', '', array('placeholder' => 'Address 1'))}}
	</div>

	<div class="small-12 large-6 columns">
		<label style="color:#ffffff">Address 2</label>
		{{Form::text('ship_address2', '', array('placeholder' => 'Address 2'))}}
	</div>

	<div class="small-12 large-6 columns">
		<label style="color:#ffffff">City*</label>
		{{Form::text('ship_city', '', array('placeholder' => 'City'))}}
	</div>

	<div class="small-12 large-3 columns" style="color:#000000">
		<label style="color:#ffffff">State*</label>
		{{Form::text('ship_state', '', array('placeholder' => 'State'))}}
	</div>

	<div class="small-12 large-3 columns">
		<label style="color:#ffffff">Zip*</label>
		{{Form::text('ship_zip', '', array('placeholder' => 'Zip'))}}
	</div>
<br><br>
<div class="row">
@if(Session::get('checkoutAmt'))
{{Form::hidden('cart_id', Session::get('cart_id'))}}
<h2>Total with shipping: ${{substr(Session::get('checkoutAmt'),0,-2)}}.{{substr(Session::get('checkoutAmt'),-2)}}</h2>
@endif


<button>Submit</button>
{{Form::close()}}

</div>

</center>

@stop