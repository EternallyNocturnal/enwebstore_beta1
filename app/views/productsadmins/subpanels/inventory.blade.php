
<div class="modal fade" id="editInventory{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="editInventory{{$product->id}}" aria-hidden="true" >
  <div class="modal-dialog" style="width:100%;max-width:800px;color:#ffffff;background-color:#000000">
    <div class="modal-content" style="background-color:#000000;color:#ffffff">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="editInventory{{$product->id}}" style="background-color:#000000;color:#ffffff">Edit {{$product->name}}</h4>
      </div>
      <div class="modal-body" style="background-color:#000000;color:#000000">



{{$errors->first()}}
{{Form::model($product, array('method' => 'put', 'files' => 'true', 'route' => array('updateProducts', $product->id)))}}
	
								
		<div class="col-sm-6 col-md-6" style=" text-align:left">
			<h1>Available Sizes</h1><br>
			@foreach(Size::select('size')->distinct()->get() as $size)
				{{Form::hidden($size->size, 0)}}
				{{Form::checkbox($size->size)}}
				<label style="color:#ffffff">{{Str::title($size->size)}}</label><br>
			@endforeach	
			{{Form::hidden('onesize', 0)}}					
			{{Form::checkbox('onesize', 1, $product->onesize)}}
			<label style="color:#ffffff">One Size Only</label><br>
		</div>

							
		<div class="col-sm-6 col-md-6" style=" text-align:left">	
			<h1>Prices</h1><br>
			@foreach(Size::select('size')->distinct()->get() as $size)
				<label style="color:#ffffff">{{$size->size}} Price</label><br>
				{{Form::text($size->size."_price", $product->PriceTag($size->size))}}<br>
			@endforeach
			<label style="color:#ffffff">One Size Only Price</label><br>
			{{Form::text('onesize_price', $product->PriceTag('onesize'))}}
		</div>
		


	</div>
    <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
        {{Form::close()}}
      </div>
    </div>
  </div>
  </div>

