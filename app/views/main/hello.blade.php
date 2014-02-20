@extends('layouts.default')
@section('content')
		
		<h1>Welcome to
			<br><br>
			Precise Maintenance<br>
			<img src="http://www.precisemaintenance.com/stockimages/DigitalToolbox.png"/>
			Digital Toolbox</h1><br>

{{ Form::open(array('url' => '/worker')) }}
  Username:{{ Form::text('username') }}<br>
  Password: {{ Form::text('password') }}<br>
   {{ Form::submit ('Log In') }}

    {{ Form::close() }}
@stop