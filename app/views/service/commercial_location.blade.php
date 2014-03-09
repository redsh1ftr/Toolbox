@extends('layouts.report')
@section('content')

@foreach($services1 as $services)
<ul>

	{{ $services->location }}

</ul>
@endforeach


{{ Form::open(array('url' => '/services/commercial/create', 'POST')) }}

{{ Form::text('location') }}

{{ Form::submit ('Add Commercial Location') }}

    {{ Form::close() }}
@stop