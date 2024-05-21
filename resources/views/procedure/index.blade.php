@extends('layout.master')

@section('content')
@include('layout.partials.header-right',['name'=>'Procedure','key'=>'List'])
<a href="{{ route('procedure.create') }}" class="btn btn-success float-right m-2">Add new Procedure</a>

<table id="customers">
  <tr>
    <th>Procedure ID</th>
    <th>Procedure name</th>
    <th>Description</th>
    <th>Action</th>
  </tr>
  @foreach($procedures as $procedureItem)
            <tr>
              <td>{{ $procedureItem->id }}</th>
              <td>{{ $procedureItem->name }}</td>
              <td>{{ $procedureItem->description }}</td>
              <td>
                <a href="" class="btn btn-default">Edit</a>
                <a href="" class="btn btn-danger action_delete">Delete</a>
              </td>
              
            </tr>
  @endforeach
@endsection


