@extends('layouts.main-layout')
@section('content')
  <h1>
    Employees:
  </h1>
  <ul>
    @foreach ($employees as $employee)
        <li>
          <a href="{{route('employee.show', $employee -> id)}}">
            {{ $employee -> firstname }} {{ $employee -> lastname }}
          </a>
        </li>
    @endforeach
  </ul>
  <br><br>
  <h3 class="create">
    <a href="{{route('employee.create')}}">
      CREATE
    </a>
  </h3>
@endsection
