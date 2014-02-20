@extends('layouts.default')
@section('content')
	
	
{{ Form::open(array('url' => '/marketing/call/create', 'POST')) }}
  Business Name:{{ Form::text('business_name') }}<br>
  Phone Number: {{ Form::text('phone') }}<br>
  Who Answered: {{ Form::text('answered') }}<br>
  Office Manager: {{ Form::text('office_manager') }}<br>
  Contact Email: {{ Form::text('email') }}<br>
  Hours: {{ Form::text('hours') }}<br>
  Notes: {{ Form::textarea('call_notes') }}<br>
   {{ Form::submit ('Log Call') }}

    {{ Form::close() }}


@foreach($call_list1 as $call_list)
<ul>
Business Name:<br>
{{ $call_list->business_name }}<br>
Number Dialed: 
{{ $call_list->phone }}<br>
Who Answered: 
{{ $call_list->answered }}<br>
Office Manager: 
{{ $call_list->office_manager }}<br>
Email: 
{{ $call_list->email }}<br>
Hours: 
{{ $call_list->hours }}<br>
Notes: <br>
{{ $call_list->call_notes }}<br><br>
</ul>
@endforeach

@stop