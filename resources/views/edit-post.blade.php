<html>
<head>
    <title>Edit Post</title>
</head>
<body>
@if(Session::has('post-update'))
    <span>{{Session::get('post-update')}}</span>
@endif
<form method="post" action="{{route('update.post')}}">
    @csrf
    <input type="hidden" name="id" value="{{$admin->id}}">
    Post:<br><input type="text" name="name" value="{{$admin->name}}"><br>
    Description:<br><textarea name="description">{{$admin->description}}</textarea><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>
