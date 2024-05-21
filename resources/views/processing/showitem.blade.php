@foreach($processItemView as $data)
<p>Cập nhật tình trạng giai đoạn "{{ $data->process->name }}"
    của dự án "{{ $data->jobprocess->name }}" thành: 
    @endforeach
<form action="{{ route('job.updateprocess',['id'=>$data->id]) }}" method="post" enctype="multipart/form-data">
    @csrf    
    <select name="status_id">
        @foreach($status as $stt)
        <option value="{{ $stt->id }}">{{ $stt->status }}</option>
        @endforeach
    </select>
</p>

<button type="submit">Confirm</button>
</form>

<a href="{{ url()->previous() }}">Back</a>