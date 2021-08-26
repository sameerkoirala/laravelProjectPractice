<!doctype>
<html>
<head>
    <title>Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>


<div class="form-group">
    <form method="post"  class="form" action="{{route('sum-of-numbers')}}">
        @csrf
        <div class="mb-3">
            <label class="form-label">First Number</label>
            <input class="form-control" type="number" name="first">
        </div>
        <div class="mb-3">
            <label class="form-label">Second Number</label>
            <input class="form-control" type="number" name="second">
        </div>
        <input class="btn btn-primary btn-small" type="submit" value="submit">
    </form>
</div>
</body>
</html>
