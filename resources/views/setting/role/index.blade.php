@extends('layout.master')

@section('content')
@include('layout.partials.header-right',['name'=>'Department','key'=>'List'])

<a href="" class="btn btn-success float-right m-2">Add new Role</a>

<table id="customers">
  <tr>
    <th>Role ID</th>
    <th>Role name</th>
    <th>Description</th>
    <th>Action</th>
  </tr>
  @foreach($roles as $item)
            <tr>
              <td>{{ $item->id }}</th>
              <td>{{ $item->name }}</td>
              <td>{{ $item->guard_name }}</td>
              <td>
                <a href="" class="btn btn-default">View</a>
                <a href="" class="btn btn-default">Edit</a>
                <a href="" class="btn btn-danger action_delete">Delete</a>
              </td>
              
            </tr>
  @endforeach
@endsection
