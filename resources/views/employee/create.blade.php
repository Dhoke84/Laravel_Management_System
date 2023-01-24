
@extends('employee.layout')
@section('content')
<div class="card">
  <div class="card-header">Employee Registration Page</div>
  <div class="card-body">
      
      <form action="{{ url('employee') }}" method="post" enctype="multipart/form-data">>
        {!! csrf_field() !!}
        <label>First Name</label></br>
        <input type="text" name="firstName" id="firstName" class="form-control"></br>
        <label>Last Name</label></br>
        <input type="text" name="lastName" id="lastName" class="form-control"></br>
        <label>Email Id</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        
 
        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop