@extends('layouts.report')
@section('content')

@foreach($call_list1 as $call_list)
<ul>
{{ $call_list->phone }}  {{ $call_list->business_name }} 
</ul>
@endforeach

@stop