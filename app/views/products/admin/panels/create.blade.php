
<div style="background-color:#000000;color:#BDBDBD;max-width:80%;text-align:left">

	{{Form::open(array('route' => 'newProduct', 'files' => 'true', 'method' => 'post'))}}
	<div class="row">
		<div class="small-12 columns">
			{{Form::text('name', '', array('placeholder' => 'Name'))}}
		</div>


		<div class="small-12 columns">
			{{Form::text('description', '', array('placeholder' => 'Description'))}}
		</div>

		<div class="small-12 columns">
			{{Form::text('paypal', '', array('placeholder' => 'Paypal ID'))}}
		</div>

		<div class="small-12 columns">
			{{Form::text('price', '', array('placeholder' => 'Price'))}}
		</div>

		<div class="small-12 columns">

			<select name="category" style="color:#000000;max-width:300px">
				<option value="">Select a category....</option>
					@foreach(Productcat::select('name')->distinct()->get() as $cats)
						<option value="{{$cats->name}}">{{$cats->name}}</option>
					@endforeach
			</select>



{{--MODAL LINK--}}
			<a href="#" data-reveal-id="newProductCat" style="color:#700000;background-color:#000000;font-size:30px"><i class="fi-plus"></i></a>
{{--END MODAL LINK--}}
		</div>

		<div class="small-12 columns">
			
			{{Form::checkbox('active', 1)}}<label>Active</label>
		</div>
		<div class="small-12 columns">
			
			{{Form::checkbox('upcomming', 1)}}<label>Upcomming</label>
		</div>
		<div class="small-12 columns">
			
			{{Form::checkbox('onsale', 1)}}<label>On Sale</label>
		</div>

	<hr>
Sizes
{{--Size Options--}}

		
				@foreach(Size::select('size')->distinct()->get() as $size)

				{{Form::hidden($size->size, 0)}}
				<div class="small-12 columns" >	
				<input type="checkbox" name="{{$size->size}}" value="1">				
						
						<label>{{Str::title($size->size)}}</label>
				</div>
				@endforeach
				<div class="small-12 columns">
						{{Form::checkbox('onesize', 1)}}
						<label>One Size Only</label>
				</div>




{{--END Size Options--}}

<hr>
Images

{{--Images--}}

				<div class="small-12 columns">
					<label>Main Image</label>
					{{Form::file('main_image')}}
				</div>
{{--END Images--}}


		</div>



		<center>

			<div class="small-12 columns">
				<button style="color:#700000;background-color:#000000;font-size:30px"><i class="fi-plus"></i> New Product </button>
			</div>
		</center>

		

	{{Form::close()}}


</div>
