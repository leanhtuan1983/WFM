<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{ route('procedure.store') }}" method="POST" enctype="multipart/form-data">
@csrf
    <div class="row">
        <label>Procedure name</label>
            <input type="text" name="name" id="procedure" placeholder="Enter Procedure name">  
    </div>

    <div class="row">
        <label>Description</label>
            <textarea name="description" id="description" placeholder="Description here"></textarea>  
    </div>

    <div class="row">
        <label>Danh mục</label>
            <select class="form-control" name="parent_id">
                <option value="0">Chọn menu cha</option>
                {!! $optionSelect !!}
            </select>
    </div>

    <div class="row">
        <button type="submit">OK</button>
    </div>
</form>
</body>
</html>
