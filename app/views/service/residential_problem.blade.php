@extends('layouts.report')
@section('content')

<h1>Residential Problems</h1><br>

@foreach($problems as $problem)
<ul>

{{ link_to_route('residentialspecificproblem', ($problem->problem), $problem->id, array('id' => $problem->id)); }}



</ul>
@endforeach


{{ Form::open(array('route' => 'addresidentialproblem', 'POST')) }}

@foreach($location_id as $locationid)
{{ Form::hidden('location', $locationid->location)}}
@endforeach
{{ Form::text('problem') }}

{{ Form::submit ('Add Residential Problem') }}

    {{ Form::close() }}
@stop