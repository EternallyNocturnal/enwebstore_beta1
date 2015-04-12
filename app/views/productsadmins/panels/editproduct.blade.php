<table width="100%" class="colorface2" >
	<div style="padding:10px; margin:15px">
    <td>
      <div class="panel panel-default" style="border:1px transparent solid;border-radius:45px;color:#000000;background-color:#F0f0f0;padding:10px">
        <center>
    	   <h4 data-toggle="collapse" data-parent="#accordion" href="#{{$product->id}}-collapseOne" aria-expanded="false" aria-controls="{{$product->id}}-collapseOne">{{$product->name}} General Information</h4>
  		  </center>
          <div id="{{$product->id}}-collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
          <div class="panel-body" style="padding:20px; margin:15px;color:#000000;background-color:#000000;border-radius:35px">

          <table  style="width:100%;color:#ffffff;background-color:#000000;border-radius:35px">
          {{View::make('productsadmins.subpanels.general')->with('product', $product)}}
        </table>
      </div>
    </div>
  </div>
</td><tr>


<td>
  <div class="panel panel-default" style="border:1px transparent solid;border-radius:45px;color:#000000;background-color:#F0f0f0;padding:10px">
    <center>
      <h4  data-toggle="collapse" data-parent="#accordion" href="#{{$product->id}}-collapseTwo" aria-expanded="false" aria-controls="{{$product->id}}-collapseTwo" >
          {{$product->name}} Sizes & Inventory
      </h4>
    </center>
    <div id="{{$product->id}}-collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body" style="padding:20px; margin:15px;background-color:#ffffff;border-radius:35px">
        <table style="text-align:left;width:100%;color:#000000;background-color:#000000;border-radius:35px">
          {{View::make('productsadmins.subpanels.inventory')->with('product', $product)}}
        </table>
      </div>
    </div>
  </div>
</td><tr>

<td data-toggle="collapse" data-parent="#accordion" href="#{{$product->id}}-collapseThree" aria-expanded="false" aria-controls="{{$product->id}}-collapseThree" >
 <div class="panel panel-default" style="border:1px transparent solid;border-radius:45px;color:#000000;background-color:#F0f0f0;padding:10px">
      <center><h4>{{$product->name}} Images</h4></center>
    
    <div id="{{$product->id}}-collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
     <div class="panel-body" style="padding:20px; margin:15px;background-color:#ffffff;color:#000000;border-radius:35px;">
     	{{View::make('productsadmins.subpanels.images')->with('product', $product)}}
	</div>
    </div>
</div>
</td>
</div>
</table>