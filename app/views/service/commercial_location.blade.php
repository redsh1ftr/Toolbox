@extends('layouts.report')
@section('content')
<h1>Commercial Locations</h1><br>

@foreach($services1 as $services)
<ul>

{{ link_to_route('commercialproblem', ($services->location), $services->id, array('id' => $services->id)); }}



</ul>
@endforeach


{{ Form::open(array('url' => '/services/commercial/create', 'POST')) }}

{{ Form::text('location') }}


{{ Form::submit ('Add Commercial Location') }}

    {{ Form::close() }}
@stop