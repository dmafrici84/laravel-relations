@extends('layouts.main-layout')
@section('content')
    <h1>UPDATE PAGAMENTO</h1>
     <form action="{{route('pagamento.update', $pagamento -> id) }}" method="post"> 
        @csrf
        @method('POST')
        <div class="form-group">
            <label for="status">STATUS</label>
            <br>
            <select name="status">
                <option value="{{$pagamento -> price}}">{{$pagamento -> status}}</option>
                <option value="accepted">Accepted</option>
                <option value="pending">Pending</option>
                <option value="rejected ">rejected </option>
            </select>
        </div>
        <div class="form-group">
            <label for="price">PRICE</label>
            <br>
            <input type="number" name="price" value="{{$pagamento -> price}}">
        </div>
        <br><br>
        <button type="submit">UPDATE PAGAMENTO</button>
        <br><br>
    </form>
    <br><br>
    <h3>
      <a href="{{route('pagamenti.index')}}">
        INDEX PAGAMENTI
      </a>
    </h3>
@endsection
