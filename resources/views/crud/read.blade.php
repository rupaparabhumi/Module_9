@extends('crud.layout')
@section('title_name')
Read Data
@endsection
@section('content')
<section id="crud-app" class="conatiner w-75 mx-auto mt-5 p-5">
   <div class="w-100 bg-white p-5">
    <h1>Students List  <a href="/add-products"><button type="button" class="btn btn-success text-white btn-sm float-end">
      Create New</button></a></h1>
    @if(Session('success'))
    <div class="alert alert-success">
        <span class="text-center w-50 mx-auto"> {{session('success')}} </span>
    </div>
    @endif
     <table class="w-100 table table-responsive" align="center">
      <tr>
      <tr>
        <th>Name </th>
        <td>{{$data->Name}}</td>
      </tr>
      <tr>
      <th>Age </th>
        <td>{{$data->Age}}</td>
      </tr>
      <tr>
      <th>Skills</th>
        <td>{{$data->Skills}}</td>
</tr>

   <tr>
    <th>Desgination</th>
     <td>{{$data->Desgination}}</td>
</tr>

<tr>Address</th>
<td>{{$data->Address}}</td>
</tr>
 </table>
   </div>
</section>    
@endsection