
<td style="color:#000000">
	
		<div class="col-12-sm col-6-md ">
			<label style="color:#ffffff">Product Name</label><br>
			{{Form::text('name')}}
		</div>

		<div class="col-12-sm col-6-md ">
			<label style="color:#ffffff">PayPal ID</label><br>
			{{Form::text('paypal')}}
		</div>

		
		<div class="col-12-sm col-6-md ">
			<label style="color:#ffffff">Product Description</label><br>
			{{Form::textarea('description', $product->description, array('placeholder' => 'Product Description', 'style' => 'max-height:150px;'))}}
		</div>
		<div class="col-12-sm col-6-md ">&nbsp</div>
</td>
<td style="color:#000000;text-align:left;">
		<div class="col-12-sm col-6-md ">
			<label style="color:#ffffff">Price Display</label><br>
			{{Form::text('price')}}		
		</div>

		<div class="col-12-sm col-6-md ">
			<label style="color:#ffffff">Category</label><br>
			<select name="category" style="color:#000000;max-width:300px">
					<option value="{{$product->category}}">{{Str::title($product->category)}}</option>
						@foreach(Productcat::select('name')->distinct()->get() as $cats)
							<option value="{{$cats->name}}">{{$cats->name}}</option>
						@endforeach
			</select>
		

		<div class="small-12 large-12 columns">&nbsp</div>
			<div class="small-12 large-4 columns">
				{{Form::hidden('active', 0)}}
				{{Form::checkbox('active')}}<label style="color:#ffffff">Active</label>
			</div>
			<div class="small-12 large-4 columns">
				{{Form::hidden('preorder', 0)}}
				{{Form::checkbox('preorder')}}<label style="color:#ffffff">Upcomming</label>
			</div>
			<div class="small-12 large-4 columns">
				{{Form::hidden('onsale', 0)}}
				{{Form::checkbox('onsale')}}<label style="color:#ffffff">On Sale</label>
		</div>
		</div>
	</td>
	</center>
	</div>
	</div>
