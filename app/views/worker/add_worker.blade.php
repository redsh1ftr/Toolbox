@extends('layouts.report')
@section('content')


{{ Form::open(array('route' => 'addworker', 'POST')) }}

<h2>
Add Worker:
</h2><br>
<table border=0><colspan=3>
<th>Worker Name:</th><th> {{ Form::text('first') }}{{ Form::text('last') }}<th><tr>
<th>Title:</th><th> {{ Form::text('title') }}</th></tr>
<th>Phone:</th><th> {{ Form::text('phone')}}</th><tr>
<th>eMail:</th><th> {{ Form::text('email')}}</th><tr>
<th>Address:</th><th>{{ Form::text('street1')}} {{ Form::text('street2')}}</th><tr>
<th>City:</th><th>{{ Form::text('city')}}</th><tr>
<th>Zip:</th><th> {{ Form::text('zip')}}</th><tr>
</table>
<h2>
Availability:
</h2><br>
<table border=0><colspan=3>
<th>Monday:</th><th>{{ Form::text('monday') }}</th><tr>
<th>Tuesday:</th><th>{{ Form::text('tuesday') }}</th><tr>
<th>Wednesday:</th><th>{{ Form::text('wednesday')}}</th><tr>
<th>Thursday:</th><th>{{ Form::text('thursday')}}</th><tr>
<th>Friday:</th><th>{{ Form::text('friday')}}</th><tr>
<th>Saturday:</th><th>{{ Form::text('saturday')}}</th><tr>
<th>Sunday:</th><th>{{ Form::text('sunday')}}</th><tr>
<th>Hourly Rate:</th><th>{{ Form::text('rate')}}</th><tr>
</table>

Notes:<br>
{{ Form::textarea('notes')}}<br><br>

{{ Form::submit ('Add Worker') }}

    {{ Form::close() }}


@stop