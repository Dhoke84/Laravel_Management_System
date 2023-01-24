@extends('employee.layout')
@section('content')
<div class="card">
  <div class="card-header">Employee Registration Page</div>
  <div class="card-body">
      
      <form action="{{ url('employee/' .$employees->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$employees->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="firstName" id="firstName" value="{{$employees->firstName}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="lastName" id="lastName" value="{{$employees->lastName}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="email" id="email" value="{{$employees->email}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop