<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('job.store') }}" method="POST" enctype="multipart/form-data">
@csrf
    <div class="row">
        <label>Job name</label>
            <input type="text" name="name" id="procedure" placeholder="Enter Procedure name">  
    </div>

    <div class="row">
        <label>Quy trình</label>
            <select class="form-control" name="procedure_id">
                <option value="">Chọn Quy trình</option>
                @foreach($procedures as $procedure)
                <option value="{{ $procedure->id }}">{{$procedure->name}}</option>
                @endforeach
            </select>
    </div>
    <div class="row">
        <button type="submit">OK</button>
    </div>
</form>
</body>
</html>



