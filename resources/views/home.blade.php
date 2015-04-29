@extends('layouts.master')

@section('content')

<h1>Select your group</h1>

<form id="group-selector" action="group/1" method="post">
  <select name="group" id="group">
    <option value="1">Group 1</option>
    <option value="2">Group 2</option>
    <option value="3">Group 3</option>
    <option value="4">Group 4</option>
    <option value="5">Group 5</option>
    <option value="6">Group 6</option>
    <option value="7">Group 7</option>
  </select>

  {!! Form::token() !!}

  <input type="submit" value="GO" class="btn btn-primary">
</form>

<h2>Today's Loadshedding for all groups</h2>

@if(Session::has('fail'))
  <div class="alert alert-danger">{{ Session::get('fail') }}</div>
@endif

<table class="table">
    <thead>
      <tr>
        <th>Group</th>
        <th>Loadshedding Time</th>
      </tr>
    </thead>
    <tbody>

    @foreach($schedule_today as $st)
      <tr>
        <td>{{ $st->group_name }}</td>
        <td>
          {{ Helpers::convert_to_ampm($st->time1_start) }} to {{ Helpers::convert_to_ampm($st->time1_end) }}
          <br />
          {{ Helpers::convert_to_ampm($st->time2_start) }} to {{ Helpers::convert_to_ampm($st->time2_end) }}
        </td>
      </tr>
    @endforeach

    </tbody>
</table>
@stop

@section('footer')
  <script>
    document.getElementById('group').onchange = function(){
      document.getElementById('group-selector').action = '/group/'+this.value;
    }
  </script>
@stop