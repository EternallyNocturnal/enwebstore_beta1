	@extends('layouts.adminmaster')

	@section('content')

	<div class="large-4 columns">
		<a href="{{URL::route('contacts.index')}}" style="color:#ffffff;background-color:#000000;font-size:30px"><i class="fi-home"></i> All Contacts</a>
	</div>

	<div class="large-4 columns">	
		<a href="#" data-reveal-id="newContact" style="color:#ffffff;background-color:#000000;font-size:30px"><i class="fi-plus"></i><i class="fi-torsos-all"></i> New Contact</a>
	</div>

	<div class="large-4 columns">
		<a href="#" data-reveal-id="searchContact" style="color:#ffffff;background-color:#000000;font-size:30px"><i class="fi-magnifying-glass"></i> Find Contact</a>
	</div>

	<div class="row">
	
		{{View::make('contacts.show')->with('contacts', $contacts)}}
		
	</div>


	@stop