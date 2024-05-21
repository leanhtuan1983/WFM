@extends('layout.master')

@section('content')
@include('layout.partials.header-right',['name'=>'Job','key'=>'Detail'])

  <div class="row">
    <div class="col-md-6" style="vertical-align:middle;">
      <table class="table">
        <thead>
          <tr>
            <th>Giai đoạn</td>
            <th>Tình trạng</td>
          </tr>
        </thead>
        <tbody>
        @foreach($procedure as $process)
          <tr class="process-row">
            <td><a href="{{ route('job.showitem',['id'=>$process->id]) }}">{{ $process->process->name }}</a></td>
            <td class="status">{{ $process->jobstatus->status }}</td>        
          </tr>
        @endforeach
        </tbody>
      </table>
    </div>
    <div class="col-md-6">
    @include('processing.charttest')
    </div>
  </div>

<a href="{{ url()->previous() }}" class="btn btn-info" role="button">Back</a>

@endsection


