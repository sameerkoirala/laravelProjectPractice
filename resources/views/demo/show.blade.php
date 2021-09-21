<!Doctype html>
<html>
<head>
    <title>SHOW</title>
</head>
<body>
@if($demo === null)
    <h1>No such records found.</h1>
@else
    <h1>This is Detail for DEMO ID {{$demo->id}}</h1>
    ID: {{$demo->id}} <br/>
    Name: {{$demo->name}}<br/>
    Password: {{$demo->password}}<br/>
@endif
</body>
</html>
