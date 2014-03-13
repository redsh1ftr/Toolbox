@extends('layouts.report')
@section('content')

<h1>

{{link_to_route('workerlist', 'Worker List')}}<br><br>

{{link_to_route('displayaddworker', 'Add a Worker')}}

@stop