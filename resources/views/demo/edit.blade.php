<!Doctype html>
<html>
<head>
    <title>Edit</title>
</head>
<body>
<h1>This is Edit Form for {{$newId}}</h1>
<form action="{{url('/') . '/demos/' . $newId}}" method="POST">
    @csrf
    @method('PATCH')
    <input type="submit" value="submit">
</form>
</body>
</html>
