<!Doctype html>
<html>
<head>
    <title>Show</title>
</head>
<body>
<h1>This is Delete Form for {{$id}}</h1>
<form method="POST" action="{{ url('/demos' . '/' . $id) }}" accept-charset="UTF-8" style="display:inline">
   @csrf
    @method('DELETE')
    <input type="submit" value="Submit">
</form>
</body>
</html>
