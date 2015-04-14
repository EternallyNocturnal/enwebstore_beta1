{{$errors->first()}}
{{Form::model($product, array('method' => 'put', 'files' => 'true', 'route' => array('updateProducts', $product->id)))}}
{{--CHECKBOXES BREAK IF YOU DONT DEFAULT THEM TO 0 BEFORE SETTING THEM APPARENTLY--}}
{{--CHECKBOXES BREAK IF YOU DONT DEFAULT THEM TO 0 BEFORE SETTING THEM APPARENTLY--}}
{{--CHECKBOXES BREAK IF YOU DONT DEFAULT THEM TO 0 BEFORE SETTING THEM APPARENTLY--}}
{{--CHECKBOXES BREAK IF YOU DONT DEFAULT THEM TO 0 BEFORE SETTING THEM APPARENTLY--}}

<ul class="tabs" data-tab role="tablist">
  <li class="tab-title active" role="presentational" ><a href="#{{$product->id}}_general" role="tab" tabindex="0" aria-selected="true" controls="{{$product->id}}_general">General Info</a></li>
  <li class="tab-title" role="presentational" ><a href="#{{$product->id}}_inventory" role="tab" tabindex="0"aria-selected="false" controls="{{$product->id}}_inventory">Inventory/Prices</a></li>
</ul>

<div class="tabs-content">
  <section role="tabpanel" aria-hidden="false" class="content active" id="{{$product->id}}_general">
	    
	<div class="row" >
		<center>
		<div class="small-12 large-6 columns">
			<label style="color:#ffffff">Product Name</label>
			{{Form::text('name')}}

		</div>

		<div class="small-12 large-6 columns">
			<label style="color:#ffffff">PayPal ID</label>
			{{Form::text('paypal')}}
		</div>


		
		<div class="small-12 large-12 columns">
			<label style="color:#ffffff">Product Description</label>
			{{Form::textarea('description', $product->description, array('placeholder' => 'Product Description', 'style' => 'max-height:150px;'))}}
		</div>
		<div class="small-12 large-12 columns">&nbsp</div>



		
		<div class="small-12 large-6 columns">
			<label style="color:#ffffff">Price Display</label>
			{{Form::text('price')}}		
		</div>

		
		<div class="small-12 large-6 columns">
			<label style="color:#ffffff">Category</label>
			<select name="category" style="color:#000000;max-width:300px">
					<option value="{{$product->category}}">{{Str::title($product->category)}}</option>
						@foreach(Productcat::select('name')->distinct()->get() as $cats)
							<option value="{{$cats->name}}">{{$cats->name}}</option>
						@endforeach
			</select>
	{{--MODAL LINK--}}
				<a href="#" data-reveal-id="newProductCat" style="color:#700000;background-color:#000000;font-size:30px"><i class="fi-plus"></i></a>
	{{--END MODAL LINK--}}
		</div>

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

	</center>
	</div>

	</section>

  <section role="tabpanel" aria-hidden="true" class="content" id="{{$product->id}}_inventory">
	    
	<div class="row" style="text-align:left;">

	{{--Size Options--}}
					
			
					@foreach(Size::select('size')->distinct()->get() as $size)

					<div class="small-6 large-3 columns" >	
					
					{{Form::hidden($size->size, 0)}}
					{{Form::checkbox($size->size)}}

						
							<label style="color:#ffffff">{{Str::title($size->size)}}</label>
					</div>

					<div class="small-6 large-3 columns" >	
						
					<label style="color:#ffffff">{{$size->size}} Inventory</label>
					{{Form::text($size->size."_inv", $product->Inventory($size->size))}}

							
					</div>

					@endforeach
					<div class="small-6 large-3 columns">
							{{Form::checkbox('onesize', 1, $product->onesize)}}
							<label style="color:#ffffff">One Size Only</label>
					</div>
					<div class="small-6 large-3 columns">
						<label style="color:#ffffff">One Size Only Inventory</label>
							{{Form::text('onesize_inv', $product->Inventory('onesize'))}}
							
					</div>




	{{--END Size Options--}}

<hr>


{{--Images--}}

				<div class="small-12 large-6 columns">
					<label style="color:#ffffff">Main Image</label>
					{{Form::file('main_image')}}
				</div>
{{--END Images--}}



	
	<div class="small-block-grid-5 large-block-grid-9">
		Current Images:<br><img style="max-height:100px" src="http://www.eternallynocturnal.com/store/public/thumbs/products/{{$product->name}}.jpg">

		@foreach(Imager::where('product_id', $product->id)->get() as $imgs)
			<img src="//localhost/enwebstore_beta1/public/thumbs/products/{{$imgs->name}}" style="max-height:100px" />
		@endforeach

	</div>

</div>



<button style="color:#700000;background-color:#000000;font-size:30px"><i class="fi-play-circle"></i> Update {{$product->name}} </button>

<label style="color:#ffffff"></label>

</section>
</div>

{{Form::close()}}
