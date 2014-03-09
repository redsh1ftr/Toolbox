@extends('layouts.report')
@section('content')

<h1>Residential Locations</h1> <br><br>

@foreach($services1 as $services)
<ul>


{{ link_to_route('residentialproblem', ($services->location), $services->id, array('id' => $services->id)); }}


</ul>
@endforeach


{{ Form::open(array('route' => 'addresidentiallocation', 'POST')) }}

{{ Form::text('location') }}

{{ Form::submit ('Add Location') }}

    {{ Form::close() }}
@stop