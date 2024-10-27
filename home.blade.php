@extends('layout')

@section('title')
<h1>All Users Data</h1>
@endsection

@section('content')

<div class="container">
	<a href="{{ Route('employes.create') }}" class="btn btn-success">Add User</a>
</div>
@if(session('status'))
<div class="alert alert-success my-1 mb-1">
  {{session('status')}}
</div>
@endif

<table class="table my-3 table-bordered text-center">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Salary</th>
      <th scope="col">DOB</th>
      <th scope="col">View</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>

    </tr>
  </thead>
  <tbody>
  	@php $sno = 1; @endphp

  	@foreach($data as $value)
    <tr>
    	
    	
      <th scope="row">{{ $sno++ }}</th>
      <td>{{ $value->name }}</td>
      <td>{{ $value->email }}</td>
      <td>{{ $value->salary }}</td>
      <td>{{ $value->dob }}</td>
      <td> <a href="{{ Route('employes.show',$value->id) }}" class="btn btn-primary">View</a> </td>
      <td> <a href="{{ Route('employes.edit',$value->id) }}" class="btn btn-warning">Update</a> </td>
      <form action="{{ Route('employes.destroy',$value->id) }}" method="POST">
        <!-- sepearate method for delete because it requires 'DELETE method to perform destroy function' -->
        @method('DELETE')
        @csrf
        <td> <button type="submit" class="btn btn-danger">Delete</button> </td>
      </form>
      
     
    </tr>
     @endforeach
  </tbody>
</table>
@endsection