{{Form::open(array('route' => 'contacttypes.store', 'method' => 'post'))}}

{{Form::text('type', '', array('placeholder' => 'Band Member, Photographer, Model, etc.'))}}

<button  class="fi-plus" style="color:#700000;background-color:#000000;font-size:30px;border:1px #ffffff solid;"></button>

{{Form::close()}}

