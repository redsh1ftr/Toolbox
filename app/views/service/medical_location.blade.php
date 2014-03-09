@extends('layouts.report')
@section('content')

<h1>Medical Locations</h1> <br><br>

@foreach($services1 as $services)
<ul>


{{ link_to_route('medicalproblem', ($services->location), $services->id, array('id' => $services->id)); }}


</ul>
@endforeach


{{ Form::open(array('url' => '/services/medical/create', 'POST')) }}

{{ Form::text('location') }}

{{ Form::submit ('Add Location') }}

    {{ Form::close() }}
@stop