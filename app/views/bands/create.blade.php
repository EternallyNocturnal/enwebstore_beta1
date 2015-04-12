{{Form::open(array('route' => 'bands.store', 'method' => 'post', 'files' => 'true'))}}

{{Form::text('name', '', array('placeholder' => 'Band Name'))}}

<select name="contact">
	<option value="">Select a contact...</option>
	@foreach(Contact::get() as $contact)
	<option value="{{$contact->id}}">{{$contact->f_name}} {{$contact->l_name}}</option>
	@endforeach
</select>

{{Form::close()}}