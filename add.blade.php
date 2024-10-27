@extends('layout')

@section('title')
<h2>Add User</h2>
@endsection

@section('content')
<form action="{{ Route('employes.store') }}" method="POST">
	 @method('POST') 
	@csrf

  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text"  class="form-control" id="name" name="name">
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email"  class="form-control" id="email" name="email">
  </div>

  <div class="mb-3">
    <label for="salary" class="form-label">Salary</label>
    <input type="number" class="form-control" id="salary" name="salary">
  </div>


  <div class="mb-3">
    <label for="dob" class="form-label">DOB</label>
    <input type="text"  class="form-control" id="dob" name="dob">
  </div>


  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password"  class="form-control" id="password" name="password">
  </div>


  <button type="submit" class="btn btn-primary">Add</button>
  <a href="{{ Route('employes.index') }}" class="btn btn-danger">Cancel</a>
</form>
@endsection
