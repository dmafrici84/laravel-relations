@extends('layouts.main-layout')
@section('content')
  <h1>
    Locations:
  </h1>
  <ul>
    @foreach ($locations as $location)
      <li>
        <a href="#">
          {{ $location -> name }}
        </a>
      </li>
    @endforeach
  </ul>
@endsection
