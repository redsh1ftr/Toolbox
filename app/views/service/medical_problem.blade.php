@extends('layouts.report')
@section('content')

<h1>Medical Problems</h1><br>

@foreach($problems as $problem)
<ul>

{{ link_to_route('medicalspecificproblem', ($problem->problem), $problem->id, array('id' => $problem->id)); }}



</ul>
@endforeach


{{ Form::open(array('route' => 'addmedicalproblem', 'POST')) }}

@foreach($location_id as $locationid)
{{ Form::hidden('location', $locationid->location)}}
@endforeach
{{ Form::text('problem') }}

{{ Form::submit ('Add Medical Problem') }}

    {{ Form::close() }}
@stop