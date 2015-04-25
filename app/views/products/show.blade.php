{{$product->name}} - ${{$product->price}}

<hr>
<div class="row">
	<div class="small-12 large-6 columns">
	
		<ul class="example-orbit" style="color:#ffffff;min-height:350px;max-width:300px" data-orbit >
		  <li>
		  	

	<a href="#" data-reveal-id="image_popout_main" >	
		<img src="http://www.eternallynocturnal.com/store/public/images/products/{{$product->name}}.jpg" style="max-height:400px" />
	</a>
		  </li>
	
		 @foreach(Imager::where('product_id', $product->id)->get() as $imgs)
		 	
		 		 		  <li>
		 		 		  	<a href="#" data-reveal-id="image_popout_{{$imgs->id}}" >
		 		 		    <img src="http://www.eternallynocturnal.com/store/public/images/products/{{$imgs->name}}" style="max-height:400px" alt="{{$imgs->name}}" />
		 		 		    </a> 
		 		 			
		 		 
		 		 		  </li> 

		 		
		 		 		 
	      @endforeach



		  </ul>
		
		</div>
	<div class="small-12 large-6 columns" style="color:#ffffff">
		<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="{{$product->paypal}}">
<input type="hidden" name="on0" value="Sizes:"><div class="blackouttext">


@if($product->onesize == 1)<div style="color:#ffffff;">One Size Only</diV>
			@else
		<select name="os0" style="max-width:50%">
			

			@if($product->xsmall == 1)
			<option value="XSmall">X-Small</option>
			@endif

			@if($product->small == 1)
			<option value="Small">Small</option>
			@endif

			@if($product->medium == "1")
			<option value="Medium">Medium</option>
			@endif

			@if($product->large == "1")
			<option value="Large">Large</option>
			@endif

			@if($product->xlarge == "1")
			<option value="X-Large">X-Large</option>
			@endif

			@if($product->xxlarge == "1")
			<option value="XX-Large">XX-Large</option>
			@endif

			@if($product->xxxlarge == "1")
			<option value="XXX-Large">XXX-Large</option>
			@endif


		</select>
		@endif
		<div style="color:#ffffff">
		
	</div>
		<input type="hidden" name="currency_code" value="USD">
			<button type="submit" value="Add to Cart" name="submit" style="background-color:transparent;color:#ffffff;"><i class="fi-shopping-cart" ></i>
			</button>


		<br>
		 <div style="color:#ffffff">{{$product->description}}</div>
	</div>
</form>
{{Form::open(array('route' => 'addToCart', 'method' => 'post'))}}
{{Form::hidden('addID', $product->id)}}
{{Form::hidden('size', 'small')}}<!--------TEST DATA REMOVE------>
<button type="submit">AddCart</button>
{{Form::close()}}
<br>
{{Form::open(array('route' => 'emptyCart', 'method' => 'post'))}}
<button type="submit">Empty Cart</button>
{{Form::close()}}

</div></div>






{{--MODAL CODE--}}


@foreach(Imager::where('product_id', $product->id)->get() as $imgs)


 			<div id="image_popout_{{$imgs->id}}" class="reveal-modal" style="max-width:80%;overflow-y:scroll;background-color:#000000;" data-reveal> 
		 		 
		 		 	                		<img src="http://www.eternallynocturnal.com/store/public/images/products/{{$imgs->name}}" style="max-height:700px" />
		 		 	                        <div style="color:#ffffff">{{$product->description}}</div>
		 		 	        
		 		 
		 		 	        <a href="#" class="close-reveal-modal" data-reveal-id="showProduct_{{$product->id}}" style="color:#700000;background-color:#000000;font-size:30px">
		 		 			 &#215;
		 		 			</a>

		 	</div>
@endforeach



		<div id="image_popout_main" class="reveal-modal" style="max-width:80%;overflow-y:scroll;background-color:#000000;" data-reveal> 

			                              <img src="http://www.eternallynocturnal.com/store/public/images/products/{{$product->name}}.jpg" style="max-height:700px" />
			                              <div style="color:#ffffff">{{$product->description}}</div>
			        

			        <a href="#" class="close-reveal-modal" data-reveal-id="showProduct_{{$product->id}}" style="color:#700000;background-color:#000000;font-size:30px">
					 &#215;
					</a>


	    </div>



{{--END MODAL CODE--}}
