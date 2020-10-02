@extends('layouts.main-layout')
@section('content')
    <h3>NEW EMPLOYEE</h3>
    <form action="" method="post">
        @csrf
        @method('POST')

        <div class="form-group">
            <label for="firstname">FIRSTNAME</label>
            <br>
            <input type="text" name="firstname" value="">
        </div>
        <div class="form-group">
            <label for="lastname">LASTNAME</label>
            <br>
            <input type="text" name="lastname" value="">
        </div>
        <div class="form-group">
            <label for="date_of_birth">DATE OF BIRTH</label>
            <br>
            <input type="date" name="date_of_birth" value="">
        </div>
        <div class="form-group">
            <label for="private_code">PRIVATE CODE</label>
            <br>
            <input type="text" name="private_code" value="">
        </div>
        <div class="form-group">
            <label for="location_id">LOCATION</label>
            <br>
            <select name="location_id">
              @foreach ($locations as $location)
                <option value="{{$location -> id}}">
                  {{$location -> name}} ({{$location -> city}})
                </option>
              @endforeach
            </select>
        </div>
        <br><br>
        <button type="submit">SAVE</button>
        <br><br>
    </form>
    <br><br>
    <h3>
      <a href="{{route('employees.index')}}">
        INDEX EMPLOYEES
      </a>
    </h3>
@endsection
