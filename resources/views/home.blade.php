@extends('layouts.main-layout')
@section('content')
  <h1>
    <a href="{{route('employees.index')}}">Employees</a>
  </h1>
  <h1>
    <a href="{{route('locations.index')}}">Locations</a>
  </h1>
  <h1>
    <a href="{{route('tasks.index')}}">Tasks</a>
  </h1>
@endsection
