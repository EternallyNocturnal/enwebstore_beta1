

<td style="padding:20px;"><h1>Aavailable Sizes</h1><br>
	<div class="small-6 large-3 columns">
							{{Form::checkbox('onesize', 1, $product->onesize)}}
							<label style="color:#ffffff">One Size Only</label>
					</div>
<td><h1>Inventory</h1><br>
						<div class="small-6 large-3 columns">
						<label style="color:#ffffff">One Size Only Inventory</label><br>
							{{Form::text('onesize_inv', $product->Inventory('onesize'))}}
							
					</div>
<td><h1>Prices</h1><br>
							<label style="color:#ffffff">One Size Only Price</label><br>
							{{Form::text('onesize_price', $product->PriceTag('onesize'))}}
	<tr>
					@foreach(Size::select('size')->distinct()->get() as $size)
<td style="padding:20px"><!--Size Available-->
					<div class="small-6 large-3 columns" >	
					
					{{Form::hidden($size->size, 0)}}
					{{Form::checkbox($size->size)}}

						
					<label style="color:#ffffff">{{Str::title($size->size)}}</label>
					</div>
</td>
<td>
				
						
					<label style="color:#ffffff">{{$size->size}} Inventory</label><br>
					{{Form::text($size->size."_inv", $product->Inventory($size->size))}}
			
<td>
					<label style="color:#ffffff">{{$size->size}} Price</label><br>
					{{Form::text($size->size."_price", $product->PriceTag($size->size))}}
							
					<tr>

					@endforeach
					{{$errors->first()}}
					<button type="submit">sub</button>
					

