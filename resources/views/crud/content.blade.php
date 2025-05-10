@extends('crud.layout')
@section('title_name')
Home Page
@endsection
@section ('content')

<section id="CRUD_practice" class="container w-75 mx-auto mt-5 p-5">
<div class="w-100 bg-white p-5">
<h1>student list <a href="/add-students"> <button type="button" class="btn btn-success text-white btn-sm 
        float-end">Add New</button></a></h1>
        @if(Session('success'))
        <div class="alert alert-success">
            <span class="text-center w-50 mx-auto"> {{session('success')}} </span>
</div>
@endif

<table class="w-100 table table-responsive" align="center">
    <thead>
        <tr>
            <th>Name</th>
            <th>Age</th>
            <th>Skills</th>
            <th>Desgination</th>
            <th>Address</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $row)
        <tr>
            <td>{{ $row->Name }}</td>
            <td>{{ $row->Age }}</td>
            <td>{{ $row->Skills }}</td>
            <td>{{ $row->Desgination }}</td>
            <td>{{ $row->Address }}</td>
            <td>
  <a href='{{URL("/edit-data/".$row->id)}}'><button type="button" class="btn btn-success text-white btn-sm">Edit</button></a>
  <a href='{{URL("/read-data/".$row->id)}}'><button type="button" class="btn btn-info text-white btn-sm ms-2">Read</button>
 <a href='{{URL("/".$row->id)}}'><button type="button" class="btn btn-danger text-white btn-sm ms-2">Delete</button></a>
             </td>
        </tr>
        @endforeach
</table>
</div>
</section>
@endsection



