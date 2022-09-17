@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        <div class="card">
            <div class="card-header justify-content-between">
                <h3 class="d-inline-flex p-2 m-0">Colors List</h3>
                <a href="{{ url('admin/colors/create') }}" class="btn btn-primary btn-sm text-white float-end mt-1">Add Color</a>
            </div>
            <div class="card-body">
            </div>
        </div>
    </div>
</div>
@endsection
