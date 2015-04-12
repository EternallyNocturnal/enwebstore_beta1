@extends('layouts.master')

@section('content')



@foreach(Product::all() as $product)
<ul class="tabs" data-tab role="tablist">
  <li class="tab-title active" role="presentational" ><a href="#eneral" role="tab" tabindex="0" aria-selected="true" controls="eneral">General Info</a></li>
  <li class="tab-title" role="presentational" ><a href="#{{$product->id}}-panel-inventory" role="tab" tabindex="0"aria-selected="false" controls="{{$product->id}}-panel-inventory">Inventory/Prices</a></li>
</ul>
@endforeach

@foreach(Product::all() as $product)
<div class="tabs-content">
  <section role="tabpanel" aria-hidden="false" class="content" id="eneral">
    <h2>First panel content goes here...</h2>
  </section>

  <section role="tabpanel" aria-hidden="true" class="content" id="{{$product->id}}-panel-inventory">
    <h2>Second panel content goes here...</h2>
  </section>

</div>

@endforeach
@stop

