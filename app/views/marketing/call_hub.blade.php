@extends('layouts.report')
@section('content')

<h1>

{{link_to_route('callreport', 'Call List')}}<br><br>

{{link_to_route('callhome', 'Log New Call')}}

@stop