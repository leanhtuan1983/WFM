@extends('layout.master')

@section('content')
@include('layout.partials.header-right',['name'=>'Department','key'=>'Add'])



<form action="{{ route('department.store') }}" method="POST" enctype="multipart/form-data">
@csrf
    <div class="row">
        <label>Dept name</label>
            <input type="text" name="name"  placeholder="Enter Department name">  
    </div>

    <div class="row">
        <label>Description</label>
            <input type="text" name="description"  placeholder="Enter Description">  
    </div>
   
    <div class="row">
        <button type="submit">OK</button>
    </div>
</form>
 
@endsection
