<table width="100%">
	<div style="padding:10px; margin:15px">
    <td>
      <div class="panel panel-default" style="border:1px transparent solid;border-radius:45px;color:#000000;background-color:#F0f0f0;padding:10px">
        <center>
         <h4 data-toggle="modal" data-target="#editProduct{{$product->id}}" >General Information</h4>
    	   
  </div>
</td><tr>


<td>
  <div class="panel panel-default" style="border:1px transparent solid;border-radius:45px;color:#000000;background-color:#F0f0f0;padding:10px">     
          <h4 data-toggle="modal" data-target="#editInventory{{$product->id}}" >Inventory</h4>
  </div>
</td><tr>

<td data-toggle="collapse" data-parent="#accordion" href="#{{$product->id}}-collapseThree" aria-expanded="false" aria-controls="{{$product->id}}-collapseThree" >
 <div class="panel panel-default" style="border:1px transparent solid;border-radius:45px;color:#000000;background-color:#F0f0f0;padding:10px">
      <h4 data-toggle="modal" data-target="#editImages{{$product->id}}" >Images</h4>
  </div>
</td>
</div>
</table>