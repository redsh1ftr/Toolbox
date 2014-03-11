@extends('layouts.report')
@section('content')
<TABLE  BORDER="0"> <TH COLSPAN="3">
<tr><th>Business Name</th><th>Phone Number</th>
@foreach($workers as $worker)
</tr>
<th>{{ link_to_route('workerprofile', ($worker->first), $worker->id, array('id' => $worker->id)); }}</th>
<th>{{ $worker->phone }}</th>
@endforeach

@stop