@extends('layouts.report')
@section('content')

<h1>

{{link_to_route('clientlist', 'Client List')}}<br><br>

{{link_to_route('clientcreate', 'Add a Client')}}

@stop