@extends('layouts.report')
@section('content')

<h1>Commercial Specific Problems</h1><br>
@foreach($problems as $problem)

<ul>

{{ $problem->specific_problem }}



</ul>
@endforeach


{{ Form::open(array('route' => 'addcommercialspecificproblem', 'POST')) }}

{{ Form::text('specific_problem') }}
@foreach($problem_id as $problemid)
{{ Form::hidden('problem', $problemid->problem)}}
@endforeach
{{ Form::submit ('Add Commercial Specific Problem') }}

    {{ Form::close() }}
@stop