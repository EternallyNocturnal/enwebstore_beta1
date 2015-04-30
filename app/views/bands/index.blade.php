@extends('layouts.bsadminmaster')
@section('content')


@foreach($bands as $band)
<div class="col-md-3">
 		<div class="panel panel-default" style="border:1px transparent solid;border-radius:95px;padding:15px;color:#000000;">
	        		  <h4 data-toggle="modal" data-target="#editBand{{$band->id}}" >{{$band->name}}</h4>
	        		  @foreach(Bandmember::where('band_id', $band->id)->get() as $member)
	        		  	{{link_to_route('bandmembers.show', "$member->f_name $member->l_name", $member->id)}} 
	        		  @endforeach

<!-- Modal -->	

       	{{View::make('bands.modals.edit')->with('band', $band)}}
      
</div></div>
@endforeach



	@stop

