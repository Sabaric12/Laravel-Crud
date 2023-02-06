<html>
<head>
    <title>Post Displayed</title>
</head>
<body>
@if(Session::has('post-view'))
    <span>{{Session::get('post-view')}}</span>
@endif
<form method="post" >
    @csrf
    <a href="/post-list">Back</a>
    <input type="hidden" name="id" value="{{$admin->id}}"><br>
    Post:<br><input type="text" name="name" value="{{$admin->name}}"><br>
    Description:<br><textarea name="description">{{$admin->description}}</textarea><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>
