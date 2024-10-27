@extends('layout')


@section('title')
<h2>Update Employee</h2>
@endsection

@section('content')
<form action="{{ Route('employes.update',$employe->id) }}" method="POST">


	@csrf
  <!-- method put because we are updating -->
 @method('PUT')
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" value="{{ $employe->name }}" class="form-control" id="name" name="name">
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" value="{{ $employe->email }}" class="form-control" id="email" name="email">
  </div>

  <div class="mb-3">
    <label for="salary" class="form-label">Salary</label>
    <input type="number" value="{{ $employe->salary }}" class="form-control" id="salary" name="salary">
  </div>


  <div class="mb-3">
    <label for="dob" class="form-label">DOB</label>
    <input type="text" value="{{ $employe->dob }}" class="form-control" id="dob" name="dob">
  </div>


  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" value="{{ $employe->password }}" class="form-control" id="password" name="password">
  </div>


  <button type="submit" class="btn btn-primary">Update</button>
  <a href="{{ Route('employes.index') }}" class="btn btn-danger">Cancel</a>
</form>
@endsection