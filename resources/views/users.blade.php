<!doctype>
<html>
<head>
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>



<div class="form-group container">
    <div class="card">
        <div class="card-head">
            <h1>Registered Users</h1>
        </div>
        <div class="card-body">
            <ul>
                @foreach ($users as $user)
                    <li>{{$user->id}}</li>
                    <li>{{$user->full_name}}</li>
                    <li>{{$user->username}}</li>
                    <li>{{$user->email}}</li>
                    <li>{{$user->contact}}</li>
                    <li>{{$user->password}}</li>
                    <li>{{$user->profile}}</li>
                    <li>{{$user->created_at}}</li>
                    <li>{{$user->updated_at}}</li>
                @endforeach
            </ul>

        </div>

    </div>
</div>
</body>
</html>
