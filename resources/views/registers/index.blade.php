@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
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
                                        <th>#</th>
                                        <th>Fullname</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Contact</th>
                                        <th>Profile</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($registers as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->full_name }}</td>
                                        <td>{{ $item->username }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->contact }}</td>
                                        <td>{{ $item->profile }}</td>
                                        <td>
                                            <a href="{{ url('/registers/' . $item->id) }}" title="View Register">
                                                <button class="btn btn-info btn-sm">
                                                    <i class="fa fa-eye" aria-hidden="true"></i> View
                                                </button>
                                            </a>
                                            <a href="{{ url('/registers/' . $item->id . '/edit') }}" title="Edit Register">
                                                <button class="btn btn-primary btn-sm">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                                                </button></a>

                                            <form method="POST" action="{{ url('/registers' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Register" onclick="return confirm('Confirm delete?')">
                                                    <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
