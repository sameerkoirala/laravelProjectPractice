@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Registers</div>
                    <div class="card-body">
                        <a href="{{ url('/registers/create') }}" class="btn btn-success btn-sm" title="Add New Register">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th><th>Fullname</th><th>Username</th><th>Email</th><th>Contact</th><th>Password</th><th>Profile</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($registers as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->fullname }}</td><td>{{ $item->username }}</td><td>{{ $item->email }}</td><td>{{ $item->contact }}</td><td>{{ $item->password }}</td><td>{{ $item->profile }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $registers->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
