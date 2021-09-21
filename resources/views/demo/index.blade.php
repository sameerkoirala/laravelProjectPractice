<!DOCTYPE HTMl>
<html>
<head>
    <link href="{{asset('/css/custom.css')}}">
    <script src="{{asset('/js/custom.js')}}"></script>
</head>
<body>
    <a href="{{url('/demos/create')}}"> <button type="button">Create</button></a>
    <table border="1px">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        @foreach($demos as $demo)
            <tr>
                <td>{{$demo->id}}</td>
                <td>{{$demo->name}}</td>
                <td>{{$demo->password}}</td>
                <td>
                    <a href="{{url("/demos") . '/' . $demo->id}}"><button type="button">Show</button></a>
                    <a href="{{url("/demos") . '/' . $demo->id . '/edit'}}"><button type="button">Edit</button></a>
                    <form action="{{url("/demos" . '/' . $demo->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?');">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    <script>
    </script>
</body>
</html>
