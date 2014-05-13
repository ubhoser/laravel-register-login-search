@extends('master')

@section('content')
  <div class="row">
    <div class="span4 offset4">
      <div class="well">
        <h4>SEARCH RESULTS FOR: "{{$term}}"</h4>
        @if (count($persons) > 0)
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>First name</th>
                <th>Last name</th>
                <th>Job</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($persons as $person)
              <tr>
                <td>{{ $person['id'] }}</td>
                <td>{{ e($person['first_name']) }}</td>
                <td>{{ e($person['last_name']) }}</td>
                <td>{{ e($person['job']) }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        @else
          <p>Sorry! We have no result for you.</p>
        @endif

      </div>
    </div>
  </div>

@endsection