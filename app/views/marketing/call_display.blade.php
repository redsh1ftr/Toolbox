@extends('layouts.report')
@section('content')
<TABLE  BORDER="0"> <TH COLSPAN="3">
<tr><th>Phone Number</th><th>Business Name</th><th>Time</th><th>Notes</th>
@foreach($call_list1 as $call_list)
</tr>
<th>{{ link_to_route('callfollowupnotes',($call_list->phone), $call_list->id, array('id' => $call_list->id)); }}</th><th>{{ $call_list->business_name }}</th><th>{{ $call_list->created_at }}</th><th>{{ $call_list->call_notes }}</th>
@endforeach

@stop