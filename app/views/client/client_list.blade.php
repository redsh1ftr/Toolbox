@extends('layouts.report')
@section('content')
<TABLE  BORDER="0"> <TH COLSPAN="3">
<tr><th>Business Name</th><th>Phone Number</th>
@foreach($client_list as $client_list1)
</tr>
<th>{{ link_to_route('clientprofile', ($client_list1->business_name), $client_list1->id, array('id' => $client_list1->id)); }}</th>
<th>{{ $client_list1->phone }}</th>
@endforeach

@stop