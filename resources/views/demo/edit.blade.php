<!Doctype html>
<html>
<head>
    <title>Edit</title>
</head>
<body>
    @if($demo === null)
        No such Record exists!
    @else
        <h1>This is Edit Form</h1>
        <form action="{{url('/demos') . '/' . $demo->id}}" method="POST">
            @csrf
            @method('PATCH')
            Name: <input type="text" name="name" value="{{$demo->name}}">
            Password: <input type="text" name="password" value="{{$demo->password}}">
            <input type="submit" value="submit">
        </form>
    @endif
</body>
</html>
