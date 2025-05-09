@extends('crud.layout')
@section('title_name')
Add Students
@endsection
@section ('content')

<section id="CRUD_practice" class="container w-75 mx-auto mt-5 p-5">
    <div class="w-75 mx-auto bg-white p-5">
        <h1> Add Student  here</h1>
        <form method="post">
            @csrf

            <div class="from-group mt-3">
                <input type="text" name="Name" placeholder="Name *" required class="form-control"/>
           </div>
             
           <div class="form-group mt-3">
            <input type="text" name="Age" placeholder="Age *" required class="form-control"/>
</div>

<div class="form-group mt-3">
    <input type="text" name="Skills" placeholder="Skills *" required class="form-control"/>
</div>

<div class="form-group mt-3">
    <input type="text" name="Desgination" placeholder="Desgination" required class="form-control"/>
</div>

<div class="form-group mt-3">
    <input type="text" name="Address" placeholder="Address" required class="form-control"/>
</div>

<div class="form-group mt-3">
    <input type="submit" required class="btn btn-success text-white fs-5" value="Add Students"/>
</div>

</form>
</div>
</section>

@endsection
