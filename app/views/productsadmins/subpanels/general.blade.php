<td style="color:#000000">
<div class="modal fade" id="editProduct{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="editProduct{{$product->id}}" aria-hidden="true" >
  <div class="modal-dialog" style="width:100%;max-width:800px;color:#ffffff;background-color:#000000">
    <div class="modal-content" style="background-color:#000000;color:#ffffff">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="editProduct{{$product->id}}" style="background-color:#000000;color:#ffffff">Edit {{$product->name}}</h4>
      </div>
      <div class="modal-body" style="background-color:#000000">
      	<table width="100%" style="color:#000000">
{{Form::model($product, array('method' => 'put', 'files' => 'true', 'route' => array('updateProducts', $product->id)))}}

<div class="col-sm-12 col-md-6">
	
	
			<label style="color:#ffffff">Product Name</label><br>
			{{Form::text('name')}}<br>
		
			<label style="color:#ffffff">PayPal ID</label><br>
			{{Form::text('paypal')}}<br>
		
			<label style="color:#ffffff">Product Description</label><br>
			{{Form::textarea('description', $product->description, array('placeholder' => 'Product Description', 'style' => 'max-height:150px;max-width:200px'))}}
			
		
</div>
<div class="col-sm-12 col-md-6">


			<label style="color:#ffffff">Price Display</label><br>
			{{Form::text('price')}}<br>
		
		
			<label style="color:#ffffff">Category</label><br>
			<select name="category" style="color:#000000;max-width:20%">
					<option value="{{$product->category}}">{{Str::title($product->category)}}</option>
						@foreach(Productcat::select('name')->distinct()->get() as $cats)
							<option value="{{$cats->name}}">{{$cats->name}}</option>
						@endforeach
			</select><br>
		

		
				{{Form::hidden('active', 0)}}
				{{Form::checkbox('active')}}<label style="color:#ffffff">Active</label><br>
			
				{{Form::hidden('onsale', 0)}}
				{{Form::checkbox('onsale')}}<label style="color:#ffffff">On Sale</label><br>

				{{Form::hidden('upcomming', 0)}}
				{{Form::checkbox('upcomming')}}<label style="color:#ffffff">Upcomming</label><br>

				{{Form::hidden('preorder', 0)}}
				{{Form::checkbox('preorder')}}<label style="color:#ffffff">Pre Order</label><br>
		

</div>
	</table>
	</div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        {{Form::close()}}
      </div>
    </div>
  </div>
  </div>

