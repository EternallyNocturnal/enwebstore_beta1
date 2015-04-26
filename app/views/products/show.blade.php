{{$product->name}} - ${{$product->price}}



<hr>
{{$product->description}}
<div class="row"><div class="large-2 columns">&nbsp</div>
	<div class="small-12 large-8 columns">
	
		<ul class="example-orbit" style="color:#ffffff;min-height:350px;max-width:250px" data-orbit >
		  <li>
		  	

	<a href="#" data-reveal-id="image_popout_main{{$product->id}}" >	
		<img src="https://www.eternallynocturnal.com/store/public/images/products/{{$product->name}}.jpg" style="max-height:400px" />
	</a>
		  </li>
	
		 @foreach(Imager::where('product_id', $product->id)->get() as $imgs)
		 	
		 		 		  <li>
		 		 		  	<a href="#" data-reveal-id="image_popout_{{$imgs->id}}" >
		 		 		    <img src="https://www.eternallynocturnal.com/store/public/images/products/{{$imgs->name}}" style="max-height:400px" alt="{{$imgs->name}}" />
		 		 		    </a> 
		 		 			
		 		 
		 		 		  </li> 

		 		
		 		 		 
	      @endforeach



		  </ul>
		
		</div>
	<div class="small-12 large-12 columns" style="color:#ffffff">



{{Form::open(array('route' => 'addToCart', 'method' => 'post'))}}
{{Form::hidden('addID', $product->id)}}

			@if($product->onesize == 1)One Size Only
			{{Form::hidden('size', 'onesize')}}
			@else
		<select name="size" style="color:#000000;max-width:50%">
			

			@if($product->xsmall == 1)
			<option value="xsmall">X-Small</option>
			@endif

			@if($product->small == 1)
			<option value="small">Small</option>
			@endif

			@if($product->medium == "1")
			<option value="medium">Medium</option>
			@endif

			@if($product->large == "1")
			<option value="large">Large</option>
			@endif

			@if($product->xlarge == "1")
			<option value="xlarge">X-Large</option>
			@endif

			@if($product->xxlarge == "1")
			<option value="xxlarge">XX-Large</option>
			@endif

			@if($product->xxxlarge == "1")
			<option value="xxxlarge">XXX-Large</option>
			@endif


		</select>
		@endif
<br>
<br>
<button type="submit" style="border-radius:45px" class="button small alert">Add to Cart</button>
{{Form::close()}}
<br>


</div></div>






{{--MODAL CODE--}}


@foreach(Imager::where('product_id', $product->id)->get() as $imgs)


 			<div id="image_popout_{{$imgs->id}}" class="reveal-modal" style="width:100%;max-width:500px;overflow-y:scroll;background-color:#000000;" data-reveal> 
		 		 
		 		 	                		<img src="http://www.eternallynocturnal.com/store/public/images/products/{{$imgs->name}}" style="max-height:700px" />
		 		 	                        <div style="color:#ffffff">{{$product->description}}</div>
		 		 	        
		 		 
		 		 	        <a href="#" class="close-reveal-modal" data-reveal-id="showProduct_{{$product->id}}" style="color:#700000;background-color:#000000;font-size:30px">
		 		 			 &#215;
		 		 			</a>

		 	</div>
@endforeach



		<div id="image_popout_main{{$product->id}}" class="reveal-modal" style="width:100%;max-width:500px;overflow-y:scroll;background-color:#000000;" data-reveal> 

			                              <img src="http://www.eternallynocturnal.com/store/public/images/products/{{$product->name}}.jpg" style="max-height:700px" />
			                              <div style="color:#ffffff">{{$product->description}}</div>
			        

			        <a href="#" class="close-reveal-modal" data-reveal-id="showProduct_{{$product->id}}" style="color:#700000;background-color:#000000;font-size:30px">
					 &#215;
					</a>


	    </div>



{{--END MODAL CODE--}}
