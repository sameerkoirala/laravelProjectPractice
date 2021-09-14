@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Register {{ $register->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/registers') }}" title="Back">
                            <button class="btn btn-warning btn-sm">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i> Back
                            </button></a>
                        <a href="{{ url('/registers/' . $register->id . '/edit') }}" title="Edit Register">
                            <button class="btn btn-primary btn-sm">
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </button>
                        </a>

                        <form method="POST" action="{{ url('registers' . '/' . $register->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Register" onclick="return confirm('Confirm delete?')">
                                <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
                            </button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $register->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Fullname </th>
                                        <td> {{ $register->full_name }} </td>
                                    </tr>
                                    <tr>
                                        <th> Username </th>
                                        <td> {{ $register->username }} </td>
                                    </tr>
                                    <tr>
                                        <th> Email </th>
                                        <td> {{ $register->email }} </td>
                                    </tr>
                                    <tr>
                                        <th> Contact </th>
                                        <td> {{ $register->contact }} </td>
                                    </tr>
                                    <tr>
                                        <th> Password </th>
                                        <td> {{ $register->password }} </td>
                                    </tr>
                                    <tr>
                                        <th> Profile </th>
                                        <td> <img src="{{url("/storage/$register->profile")}}"> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
