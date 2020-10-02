

@extends('layouts.main-layout')
@section('content')
  <h2>
    Employee: <br>
    {{ $employee -> firstname }} {{ $employee -> lastname }}
  </h2>
  <ul>
    <li>Date of birth: {{ $employee -> date_of_birth}}</li>
    <li>Private code: {{ $employee -> private_code}}</li>
  </ul>
  <h4>
    Location:
  </h4>
  <ul>
    <li>
      Name: {{$employee -> location -> name}}<br>
      Street: {{$employee -> location -> street}}<br>
      City: {{$employee -> location -> city}}<br>
      State: {{$employee -> location -> state}}
    </li>
  </ul>
  <h4>
    Tasks:
  </h4>
  <ul>
    @foreach ($employee -> tasks as $task)
      <li>
        Name: {{$task -> name}} <br>
        Description: {{$task -> description}}<br>
        Start date: {{$task -> start_date}}<br>
        End date: {{$task -> end_date}}
      </li>
    @endforeach
  </ul>

  <div class="update-delete">
    <h3 class="update">
      <a href="">
        UPDATE
      </a>
    </h3>
    <h3 class="delete">
      <a href="{{route('employee.delete', $employee -> id)}}">
        DELETE
      </a>
    </h3>
  </div>


  <h3>
    <a href="{{route('employees.index')}}">
      INDEX EMPLOYEES
    </a>
  </h3>
@endsection
