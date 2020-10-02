@extends('layouts.main-layout')
@section('content')
  <h1>
    Tasks:
  </h1>
  <ul>
    @foreach ($tasks as $task)
      <li>
        <a href="#">
          {{ $task -> name }}
        </a>
      </li>
    @endforeach
  </ul>
@endsection
