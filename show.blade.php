@extends('layout')

@section('title')
<h2>User Data</h2>
@endsection

@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Salary</th>
      <th scope="col">Dob</th>
    </tr>
  </thead>
  <tbody>
  	@php $sno = 1; @endphp
    <tr>
      <th scope="row">{{ $sno++ }}</th>
      <td>{{ $view->name }}</td>
      <td>{{ $view->email }}</td>
      <td>{{ $view->salary }}</td>
      <td>{{ $view->dob }}</td>

    </tr>
  </tbody>
</table>
<a href="{{ Route('employes.index') }}" class="btn btn-danger">Cancel</a>
@endsection