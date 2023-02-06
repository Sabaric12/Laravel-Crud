<html>
<head>
    <title>Post List</title>
    <style>
        table{
            border-collapse: collapse;
            width: 100%;
        }
        td,th{
            padding: 5px;
            border: 1px solid;
        }
    </style>
</head>
<body>
@if(Session::has('post-delete'))
    <span>{{Session::get('post-delete')}}</span>
@endif
<a style="float: right" href="{{route('post.add')}}">Add Post</a>
<table>
    <tr>
        <th>ID</th>
    <th>Name</th>
        <th>Description</th>
        <th>Action</th>
    </tr>
    @foreach($admin as $admin)
<tr>
    <td>{{$admin->id}}</td>
    <td>{{$admin->name}}</td>
    <td>{{$admin->description}}</td>
    <td>
        <a href="/edit-post/{{$admin->id}}">Edit</a>
        <a href="/delete-post/{{$admin->id}}">Delete</a>
        <a href="view-post/{{$admin->id}}">View</a>
    </td>
</tr>
    @endforeach
</table>
</body>
</html>
