@extends('layouts.report')
@section('content')
		
{{ Form::open(array('url' => '/client/new_client/create', 'POST')) }}
<TABLE  BORDER="0"> <TH COLSPAN="2">
<tr><th>Business Name:</th><th>{{ Form::text('business_name') }}</th></tr>

<tr><th>Business Type:</th><th>{{Form::select('business_type', array('Residential' => 'Residential', 'Commercial' => 'Commercial', 'Medical' => 'Medical')) }} </th></tr>

<tr><th>Contact Name:</th><th>{{ Form::text('first_name') }} {{ Form::text('last_name') }}</th></tr>

<tr><th>Office Manager:</th><th>{{ Form::text('office_manager') }}(optional)</th></tr>

<tr><th>Street:</th><th>{{ Form::text('street1') }} Suite #:{{ Form::text('street2') }}</th></tr>

<tr><th>City:</th><th>{{ Form::text('city') }}</th></tr>

<tr><th>Zip:</th><th>{{ Form::text('zip')}}</th></tr>

<tr><th>Hours:</th><th>{{ Form::text('hours') }}</th></tr>

<tr><th>Phone Number:</th><th>{{ Form::text('phone') }}</th></tr>

<tr><th>Fax Number:</th><th>{{ Form::text('fax') }}</th></tr>

<tr><th>Email:</th><th>{{ Form::text('email') }}</th></tr>

<tr><th>Notes:</th><th>{{ Form::textarea('notes') }}</th></tr>


  </table>

  {{ Form::submit ('Create Client') }}

    {{ Form::close() }}
@stop