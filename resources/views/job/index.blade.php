@extends('layout.master')

@section('content')
@include('layout.partials.header-right',['name'=>'Job','key'=>'List'])
<a href="{{ route('job.create') }}" class="btn btn-success float-right m-2">Add new Job</a>

<table id="customers">
  <tr>
    <th>Job ID</th>
    <th>Job name</th>
    <th>Procedure</th>
    <th>Action</th>
  </tr>
  @foreach($jobs as $job)
            <tr>
              <td>{{ $job->id }}</th>
              <td>{{ $job->name }}</td>
              <td>{{ $job->procedures->name }}</td>
              <td>
                <a href="{{ route('job.show',['id'=>$job->id]) }}" class="btn btn-default">View</a>
                <a href="" class="btn btn-default">Edit</a>
                <a href="" class="btn btn-danger action_delete">Delete</a>
              </td>
              
            </tr>
  @endforeach
@endsection

