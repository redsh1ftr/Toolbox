@extends('layouts.report')
@section('content')
@foreach($client_list1 as $client_list)

<h1>
{{ $client_list->business_name }}<br>
</h1>
{{ $client_list->business_type}}<br><br>



{{ $client_list->street1}} @if($client_list->street2), Suite {{ $client_list->street2 }}@endif<br>
{{ $client_list->city }} {{$client_list->state}}, {{ $client_list->zip }}<br>

<br>

<TABLE  BORDER="0"> <TH COLSPAN="2"></tr>
<th>Contact: {{$client_list->first_name}} {{$client_list->last_name}}</th></tr>
@if($client_list->office_manager) <th>Office Manager: {{$client_list->office_manager}}</th></tr>@endif</tr>
<th>Hours: {{$client_list->hours}}</th></tr>
<th>Phone: {{$client_list->phone }}</th></tr>
<th>Fax: {{ $client_list->fax }}</th></tr>
</TABLE><br>
<br>
Notes:<br>
{{ $client_list->notes }}

@endforeach


{{-- {{ link_to_route('newworkorder', ($call_list->business_name), $client_list->id, array('id' => $client_list->id)); }} --}}<br>

{{ $client_list->created_at }}
@stop