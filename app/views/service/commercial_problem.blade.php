@extends('layouts.report')
@section('content')

<h1>Commercial Problems</h1><br>

@foreach($problems as $problem)
<ul>

{{ link_to_route('commercialspecificproblem', ($problem->problem), $problem->id, array('id' => $problem->id, 'problem' =>$problem->problem)); }}



</ul>
@endforeach


{{ Form::open(array('route' => 'addcommercialproblem', 'POST')) }}

{{ Form::text('problem') }}
{{ Form::submit ('Add Commercial Problem') }}

    {{ Form::close() }}
@stop