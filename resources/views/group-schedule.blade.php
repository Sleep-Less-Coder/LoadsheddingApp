@extends('layouts.master')

@section('content')
    <h1>Loadshedding for GROUP {{ $id }}</h1>
    <table class="table">
    <thead>
      <tr>
        <th>Day</th>
        <th>Loadshedding Time</th>
      </tr>
    </thead>
    <tbody>

    @foreach($schedule as $s)
      <tr>
        <td>{{ $s->day }}</td>
        <td>
          {{ Helpers::convert_to_ampm($s->time1_start) }} to {{ Helpers::convert_to_ampm($s->time1_end) }} <br />
          {{ Helpers::convert_to_ampm($s->time2_start) }} to {{ Helpers::convert_to_ampm($s->time2_end) }}
        </td>
      </tr>
    @endforeach

    </tbody>
</table>
@stop