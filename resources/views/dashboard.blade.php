<!doctype>
<html>
<head>
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>



<div class="form-group container">
    <div class="card">
        <div class="card-head">
            <h1>Submitted Form</h1>
        </div>
        <div class="card-body">
            <form method="post"  class="form" action="">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input disabled class="form-control" type="text" name="full-name" value="{{$fullName}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <input disabled class="form-control" type="text" name="username"  value="{{$username}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input disabled class="form-control" type="text" name="email"  value="{{$email}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Contact</label>
                    <input disabled class="form-control" type="text" name="contact"  value="{{$contact}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input disabled class="form-control" type="text" name="password"  value="{{$password}}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Profile</label>
                    <img src="{{url("/storage/$path")}}">
                </div>
            </form>

        </div>

    </div>
</div>
</body>
</html>
