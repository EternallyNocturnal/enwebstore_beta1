@extends('layouts.master')
@section('content')
Options are important!<br>





<button>Log In</button><br>

<div style="color:#000000;">
<a data-dropdown="drop2" aria-controls="drop2" aria-expanded="false"><button  style="color:#000000;">Create Account</button></a>
<div style="width:80%;"id="drop2" data-dropdown-content class="f-dropdown content" aria-hidden="true" tabindex="-1">
  {{link_to_route('shippings.create')}}</div>
</div>

<button>Just ship it!</button><br>

<div style="color:#000000;">
<a data-dropdown="drop3" aria-controls="drop3" aria-expanded="false"><button  style="color:#000000;">GIVE THIS TO SOMEONE!</button></a>
<div id="drop3" data-dropdown-content class="f-dropdown content" aria-hidden="true" tabindex="-1">
  *Their Email and/or shipping information is required. MAKE VIEW FOR THIS<br></div>
</div>

<div style="color:#000000;">
<a data-dropdown="drop5" aria-controls="drop5" aria-expanded="false"><button  style="color:#000000;">Pick it up at a show!</button></a>
<div id="drop5" data-dropdown-content class="f-dropdown content" aria-hidden="true" tabindex="-1">
  *They will have to confirm a valid email address for continued contact!<br></div>
</div>









<!-- 
<div class="small-12 large-12 columns">
<a href="#" class="button" data-dropdown="drop"> &raquo;</a>
<div id="drop2" data-dropdown-content class="f-dropdown content" aria-hidden="true" tabindex="-1">
  <p>Some text that people will think is awesome! Some text that people will think is awesome! Some text that people will think is awesome!</p>
</div>

 -->


<!-- 
<ul id="drop" class="[tiny small medium large content]f-dropdown" data-dropdown-content>

</ul>
</div>

<div class="small-12 large-12 columns">
<button>PAY WITH </button><br>
*Shipping information required
</div>

<div class="small-12 large-12 columns">
<a href="#" class="button" data-dropdown="drop">Credit Card! &raquo;</a>
<ul id="drop" class="[tiny small medium large content]f-dropdown" data-dropdown-content>
</ul>

</div> -->



@stop