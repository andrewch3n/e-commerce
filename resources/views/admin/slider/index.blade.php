@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            <div class="card">
                <div class="card-header justify-content-between">
                    <h3 class="d-inline-flex p-2 mt-2">Sliders List</h3>
                    <a href="{{ url('admin/slider/create') }}" class="btn btn-primary btn-sm text-white float-end mt-2">
                        <i class="mdi mdi-plus menu-icon align-middle"></i>Add Slider
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sliders as $slider)
                                <tr>
                                    <td>{{ $sliders->title }}</td>
                                    <td>{{ $sliders->description }}</td>
                                    <td>
                                        <img src="{{ asset("$sliders->image") }}" style="width:70px; height:70px;"
                                            alt="Sliders">
                                    </td>
                                    <td>{{ $sliders->status }}</td>
                                    <td>
                                        <a href="" class="btn btn-warning btn-sm">
                                            <i class="mdi mdi-pencil menu-icon"></i>
                                        </a>
                                        <a href="" class="btn btn-danger btn-sm">
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
