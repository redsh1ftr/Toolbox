@extends('layouts.report')
@section('content')

<h1>

{{link_to_route('medicallocation', 'Medical')}}<br><br>

{{link_to_route('commerciallocation', 'Commercial')}}<br><br>

{{link_to_route('residentiallocation', 'Residential')}}<br><br>

@stop