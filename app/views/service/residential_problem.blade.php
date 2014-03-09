@extends('layouts.report')
@section('content')

@foreach($services1 as $services)
<ul>

	{{ $services->location }}

</ul>
@endforeach


{{ Form::open(array('route' => 'addcommercialproblem', 'POST')) }}

{{ Form::text('location') }}

{{ Form::submit ('Add Commercial Problem') }}

    {{ Form::close() }}
@stop