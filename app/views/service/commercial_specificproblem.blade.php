@extends('layouts.report')
@section('content')

<h1>Commercial Specific Problems

<br>
{{$problem_id}}

</h1><br>
@foreach($problems as $problem)

<ul>

{{ link_to_route('commercialspecificproblem', ($problem->problem), $problem->id, array('id' => $problem->id)); }}



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