<html>
<head>
    <title>Add Post</title>
</head>
<body>
@if(Session::has('post-add'))
    <span>{{Session::get('post-add')}}</span>
@endif
<form method="post"action="{{route('save.post')}}">
    @csrf
Post:<br><input type="text" name="name" value=""><br>
    Description:<br><textarea name="description">
    </textarea><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>
