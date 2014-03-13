@extends('layouts.report')
@section('content')
@foreach($worker1 as $worker)

<h1>
{{ $worker->first }}  {{ $worker->last }}<br>
</h1>
<h2>
{{ $worker->title}}<br><br>
</h2>


{{ $worker->street1}} @if($worker->street2), Suite {{ $worker->street2 }}@endif<br>
{{ $worker->city }} {{$worker->state}}, {{ $worker->zip }}<br>

<br>

<TABLE  BORDER="0"> <TH COLSPAN="2"></tr>
<th>Phone: {{$worker->phone }}</th></tr>
<th>eMail: {{ $worker->email }}</th></tr>
</TABLE><br>
<br>
Notes:<br>
{{ $worker->notes }}
<br><br>
<h2>
Availability:
</h2>
<table border=0><colspan=2>
	<th>Monday: </th><th>{{ $worker->monday }}</th><tr>
	<th>Tuesday: </th><th>{{ $worker->tuesday }}</th><tr>
	<th>Wednesday: </th><th>{{ $worker->wednesday }}</th><tr>
	<th>Thursday: </th><th>{{ $worker->thursday }}</th><tr>
	<th>Friday: </th><th>{{ $worker->friday }}</th><tr>
	<th>Saturday: </th><th>{{ $worker->saturday }}</th><tr>
	<th>Sunday: </th><th>{{ $worker->sunday }}</th><tr>
</table>
<br><br>
Hourly Rate: ${{$worker->rate}}
<br><br><br>
{{ $worker->created_at }}
@endforeach




@stop


