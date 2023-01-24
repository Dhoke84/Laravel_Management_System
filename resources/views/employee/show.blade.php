@extends('employee.layout')
@section('content')
<div class="card">
  <div class="card-header">Employee Details</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title"> First Name : {{ $employees->firstName }}</h5>
        <p class="card-text">Last Name : {{ $employees->lastName }}</p>
        <p class="card-text">Email : {{ $employees->email }}</p>
  </div>
      
    </hr>
  
  </div>
</div>