@extends('layouts.report')
@section('content')

<TABLE style="width:400px" BORDER="0">
<th>Worker</th><th>Phone Number</th>
@foreach($worker1 as $worker)
</tr>
<th>{{ link_to_route('workerprofile', ($worker->first), $worker->id, array('id' => $worker->id)); }} {{ link_to_route('workerprofile', ($worker->last), $worker->id, array('id' => $worker->id)); }}</th>
<th>{{ $worker->phone }}</th>
@endforeach
</table>
@stop