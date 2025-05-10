@extends('crud.layout')
@section ('title_name')
Add Products
@endsection
@section ('content')
<section id="crud-app" class="container w-75 mx-auto mt-5 p-5">
    <div class="w-75 mx-auto bg-white p-5">
        <h1>Edit students here</h1>
        <form method="post">
            @csrf

            <div class="form-group mt-3">
                <label class="text-success">Edit student Name *</label>
             <input type="text" name="Name" value="{{$editdata->Name}} " placeholder="Name *" required class="form-control"/>
</div>

<div class="form-group mt-3">
    <label class="text-success">Edit Age *</label>
    <input type="text" name="Age" value="{{$editdata->Age}}" placeholder="Age *" required class="form-control"/>
</div>

<div class="form-group mt-3">
    <label class="text-success">Edit Skills * </label>
    <input type="text" name="Skills" value="{{$editdata->Skills}}" placeholder="Skills *" required class="form-control"/>
</div>

<div class="form-group mt-3">
    <label class="text-success">Edit Desgination * </label>
    <input type="text" name="Desgination" value="{{$editdata->Desgination}}" placeholder="Desgination *" required class="form-control"/>
</div>

<div class="form-group mt-3">
    <label class="text-success">Edit Address * </label>
    <input type="text" name="Address" value="{{$editdata->Address}}" placeholder="Address *" required class="form-control"/>
</div>


<div class="form-group mt-3">
    <input type="submit" required  class="btn btn-success text-white fs-5" value="Update students"/>
</div>
</form>
</div>
</section>
@endsection
