@extends('layouts.report')
@section('content')

<h1>Medical Specific Problems</h1><br>
@foreach($problems as $problem)

<ul>

{{ $problem->specific_problem }}



</ul>
@endforeach


<br><br>

<h2>{{ link_to_route('medicallocation', 'Back to locations') }}</h2><br><br>

{{ Form::open(array('route' => 'addmedicalspecificproblem', 'POST')) }}

{{ Form::text('specific_problem') }}
@foreach($problem_id as $problemid)
{{ Form::hidden('problem', $problemid->problem)}}
@endforeach
{{ Form::submit ('Add Medical Specific Problem') }}

    {{ Form::close() }}
@stop