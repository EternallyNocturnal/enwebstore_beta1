

{{--MODAL CODE HERE--}}

	

	{{--NEW PRODUCT CATEGORY--}}

		<div id="newProductCat" class="reveal-modal" style="max-width:80%;height:200px;overflow-y:scroll;background-color:#000000;" data-reveal> 

	                              {{View::make('products.newProductCat')}}

	        <a class="close-reveal-modal">&#215;</a>


	      </div>
	{{--END NEW PRODUCT CATEGORY--}}


{{--END MODAL CODE--}}



{{--Main FORM Options--}}


<div style="background-color:#000000;color:#BDBDBD;max-width:80%;text-align:left">

	{{Form::open(array('route' => 'newProduct', 'files' => 'true', 'method' => 'post'))}}
	<div class="row">
		<div class="small-12 large-6 columns">
			{{Form::text('name', '', array('placeholder' => 'Name'))}}
		</div>


		<div class="small-12 large-6 columns">
			{{Form::text('description', '', array('placeholder' => 'Description'))}}
		</div>

		<div class="small-12 large-6 columns">
			{{Form::text('paypal', '', array('placeholder' => 'Paypal ID'))}}
		</div>

		<div class="small-12 large-6 columns">
			{{Form::text('price', '', array('placeholder' => 'Price'))}}
		</div>

		<div class="small-12 large-12 columns">

			<select name="category" style="color:#000000;max-width:300px">
				<option value="">Select a category....</option>
					@foreach(ProductCat::select('name')->distinct()->get() as $cats)
						<option value="{{$cats->name}}">{{$cats->name}}</option>
					@endforeach
			</select>



{{--MODAL LINK--}}
			<a href="#" data-reveal-id="newProductCat" style="color:#700000;background-color:#000000;font-size:30px"><i class="fi-plus"></i></a>
{{--END MODAL LINK--}}
		</div>

		<div class="small-12 large-12 columns">&nbsp</div>
		<div class="small-12 large-4 columns">
			
			{{Form::checkbox('active', 1)}}<label>Active</label>
		</div>
		<div class="small-12 large-4 columns">
			
			{{Form::checkbox('upcomming', 1)}}<label>Upcomming</label>
		</div>

		<div class="small-12 large-4 columns">
			
			{{Form::checkbox('preorder', 1)}}<label>Pre-Order</label>
		</div>

		<div class="small-12 large-4 columns">
			
			{{Form::checkbox('onsale', 1)}}<label>On Sale</label>
		</div>

	<hr>

{{--Size Options--}}

		
				@foreach(Size::select('size')->distinct()->get() as $size)
				<div class="small-12 large-6 columns" >	
				<input type="checkbox" name="{{$size->size}}" value="1">				
						
						<label>{{Str::title($size->size)}}</label>
				</div>
				@endforeach
				<div class="small-12 large-6 columns">
						{{Form::checkbox('onesize', 1)}}
						<label>One Size Only</label>
				</div>




{{--END Size Options--}}

<hr>


{{--Images--}}

				<div class="small-12 large-6 columns">
					<label>Main Image</label>
					{{Form::file('main_image')}}
				</div>
{{--END Images--}}


	
	<div class="row">


		<center>

			<div class="small-12 large-6 columns">
				<button style="color:#700000;background-color:#000000;font-size:30px"><i class="fi-plus"></i> New Product </button>
			</div>
		</center>

	</div>
		

	{{Form::close()}}


</div>


