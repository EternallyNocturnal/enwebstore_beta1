@extends('layouts.bsadminmaster')
@section('content')



	<script src="http://localhost/enwebstore_beta1/public/calendar/jquery.js"></script>
	<script src="http://localhost/enwebstore_beta1/public/calendar/jquery.datetimepicker.js"></script>
	<link rel="stylesheet" href="//localhost/enwebstore_beta1/public/calendar/jquery.datetimepicker.css">

	<div class="col-sm-12 col-md-6">
		<label class="whiteouttext">Start Time</label><br>
		<input name="starttime" id="datetimepicker_1" type="text" >
	</div>

	<div class="col-sm-12 col-md-6">
		<label class="whiteouttext">End Time</label><br>
		<input name="endtime" id="datetimepicker_2" type="text" >
	</div>
     @foreach(range(1,10) as $datetimepicker)
      <script language="javascript">
      jQuery("#datetimepicker_{{$datetimepicker}}").datetimepicker(
      	{theme:'dark',
        	 format:'d.m.Y H:i',
        	 step:15,
         	 inline:true
        });
      </script>
    @endforeach




@stop




