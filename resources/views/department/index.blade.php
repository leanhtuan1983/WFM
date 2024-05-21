@extends('layout.master')

@section('content')
@include('layout.partials.header-right',['name'=>'Department','key'=>'List'])

<a href="{{ route('department.create') }}" class="btn btn-success float-right m-2">Add new Dept</a>

<table id="customers">
  <tr>
    <th>Dept ID</th>
    <th>Dept name</th>
    <th>Description</th>
    <th>Action</th>
  </tr>
  @foreach($departments as $dept)
            <tr>
              <td>{{ $dept->id }}</th>
              <td>{{ $dept->name }}</td>
              <td>{{ $dept->description }}</td>
              <td>
                <a href="" class="btn btn-default">View</a>
                <a href="{{ route('department.edit',['id'=>$dept->id]) }}" class="btn btn-default">Edit</a>
                <a href="" class="btn btn-danger action_delete">Delete</a>
              </td>
              
            </tr>
  @endforeach
@endsection
