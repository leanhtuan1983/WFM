@extends('layout.master')

@section('content')
@include('layout.partials.header-right',['name'=>'Department','key'=>'Add'])



<form action="{{ route('department.update',$department->id) }}" method="POST" enctype="multipart/form-data">
@csrf
    <div class="row">
        <label>Dept name</label>
            <input type="text" name="name"  value ="{{$department->name}}">  
    </div>

    <div class="row">
        <label>Description</label>
            <input type="text" name="description" value = "{{$department->description}}">  
    </div>
   
    <div class="row">
        <button type="submit">Update</button>
    </div>
</form>
 @endsection
