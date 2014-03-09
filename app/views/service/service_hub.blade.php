@extends('layouts.report')
@section('content')

<h1>

{{link_to_route('medicalservice', 'Medical')}}<br><br>

{{link_to_route('commercialservice', 'Commercial')}}<br><br>

{{link_to_route('residentialservice', 'Residential')}}<br><br>

@stop