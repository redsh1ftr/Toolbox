@extends('layouts.report')
@section('content')
<TABLE  BORDER="0"> <TH COLSPAN="3">
<tr><th>Business Name</th><th>Phone Number</th><th>Time</th><th>Notes</th>
@foreach($client_list as $client_list1)
</tr>
<th>{{ link_to_route('clientprofile', ($client_list1->business_name), $client_list1->id, array('id' => $client_list1->id)); }}</th><th>{{ $client_list1->phone }}</th><th>{{ $client_list1->created_at }}</th><th>{{ $client_list1->call_notes }}</th>
@endforeach

@stop