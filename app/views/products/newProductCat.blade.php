{{$errors->first('name')}}

<div style="background-color:#000000;color:#BDBDBD;">
	<center>

		{{Form::open(array('route' => 'newProductCat', 'method' => 'post'))}}
		<div class="row">

			<div class="small-12 columns">

				{{Form::text('name', '', array('placeholder' => 'Name', 'style' => 'background-color:#000000;color:#BDBDBD;max-width:350px'))}}
			</div>


			<div class="small-12 columns">
				<button style="color:#700000;background-color:#000000;font-size:30px"><i class="fi-plus"></i> New Category </button>
			</div>

		</div>
		{{Form::close()}}
	</center>
</div>