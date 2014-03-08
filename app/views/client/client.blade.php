@extends('layouts.report')
@section('content')
@foreach($client_list1 as $client_list)

<h1>
{{ $client_list->business_name }}<br>
</h1>
{{ $client_list->business_type}}<br><br>
<TABLE  BORDER="0"> <TH COLSPAN="2"></tr>


<th>{{ $client_list->street1 }}</th> @if($client_list->street2)<th>, {{ $client_list->street2 }}</th>@endif</tr>
<th>{{ $client_list->city }}</th><th> {{$client_list->state}}, </th><th>{{ $client_list->zip }}</th></tr>
</TABLE>
<br>

<TABLE  BORDER="0"> <TH COLSPAN="2"></tr>
<th>Contact: {{$client_list->first_name}}</th><th> {{$client_list->last_name}}</th></tr>
@if($client_list->office_manager) <th>{{$client_list->office_manager}}</th></tr>@endif</tr>
<th>Hours: {{$client_list->hours}}</th></tr>
<th>Phone: {{$client_list->phone }}</th></tr>
<th>Fax: {{ $client_list->fax }}</th></tr>
</TABLE><br>
<br>
Notes:<br>
{{ $client_list->notes }}

@endforeach
<br><br><br>


{{ $client_list->created_at }}<br><br>
@stop