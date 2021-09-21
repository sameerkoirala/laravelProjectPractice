<!Doctype html>
<html>
    <head>
        <title>Create</title>
    </head>
    <body>
        <h1>This is Create Form</h1>
        <form action="{{url('/demos')}}" method="POST">
            @csrf
            Name: <input type="text" name="name">
            Password: <input type="text" name="password">
            <input type="submit" value="submit">
        </form>
    </body>
</html>
