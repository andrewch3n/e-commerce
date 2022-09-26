@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        <div class="card">
            <div class="card-header justify-content-between">
                <h3 class="d-inline-flex p-2 mt-2">Colors List</h3>
                <a href="{{ url('admin/colors/create') }}" class="btn btn-primary btn-sm text-white float-end mt-2">
                    <i class="mdi mdi-plus menu-icon align-middle"></i>Add Color
                </a>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Color Name</th>
                            <th>Color Code</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($colors as $color)
                        <tr>
                            <td>{{ $color->id }}</td>
                            <td>{{ $color->name }}</td>
                            <td>{{ $color->code }}</td>
                            <td>{{ $color->status }}</td>
                            <td>
                                <a href="{{ url('admin/colors/'.$color->id.'/edit') }}" class="btn btn-warning btn-sm">
                                    <i class="mdi mdi-pencil menu-icon"></i>
                                </a>
                                <a href="{{ url('admin/colors/'.$color->id.'/delete') }}" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-danger btn-sm">
                                    <i class="mdi mdi-delete menu-icon"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
