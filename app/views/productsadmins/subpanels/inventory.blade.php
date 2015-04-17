
<div class="modal fade" id="editInventory{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="editProduct{{$product->id}}" aria-hidden="true" >
  <div class="modal-dialog" style="width:60%;color:#ffffff;background-color:#000000">
    <div class="modal-content" style="background-color:#000000;color:#ffffff">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="editProduct{{$product->id}}" style="background-color:#000000;color:#ffffff">Edit {{$product->name}}</h4>
      </div>
      <div class="modal-body" style="background-color:#000000">
      	<table width="100%" style="color:#000000">


	{{$errors->first()}}
{{Form::model($product, array('method' => 'put', 'files' => 'true', 'route' => array('updateProducts', $product->id)))}}
<td style="padding:20px;"><h1>Available Sizes</h1><br>
	<div class="small-6 large-3 columns" style=" text-align:left">
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
					<div class="small-6 large-3 columns" style=" text-align:left">	
					
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

