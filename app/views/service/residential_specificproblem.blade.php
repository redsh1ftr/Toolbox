@extends('layouts.report')
@section('content')

<h1>Residential Specific Problems</h1><br>
@foreach($problems as $problem)

<ul>

{{ $problem->specific_problem }}



</ul>
@endforeach


<br><br>

<h2>{{ link_to_route('residentiallocation', 'Back to locations') }}</h2><br><br>

{{ Form::open(array('route' => 'addresidentialspecificproblem', 'POST')) }}

{{ Form::text('specific_problem') }}
@foreach($problem_id as $problemid)
{{ Form::hidden('problem', $problemid->problem)}}
@endforeach
{{ Form::submit ('Add Residential Specific Problem') }}

    {{ Form::close() }}
@stop