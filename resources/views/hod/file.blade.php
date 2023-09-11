<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('file.edit') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="file">file</label>
        <input type="file" name="profile">
        <button type="submit">submit</button>
    </form>
    <div style="background-color:red">
    @if(Session::get('imageName'))
        return "done";
    @endif
    <img src="{{ asset('profile/')}}" alt="" width="40px" height="40px">
    </div>
</body>
</html>