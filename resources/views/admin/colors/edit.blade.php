@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-12">
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif

            <div class="card">
                <div class="card-header justify-content-between">
                    <h3 class="d-inline-flex p-2 mt-2">Edit Color</h3>
                    <a href="{{ url('admin/colors') }}" class="btn btn-secondary btn-sm text-white float-end mt-2">
                        <i class="mdi mdi-arrow-left-thick menu-icon align-middle"></i>
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ url('admin/colors/' . $color->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="">Color Name</label>
                            <input type="text" name="name" value="{{ $color->name }}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Color Code</label>
                            <input type="text" name="code" value="{{ $color->code }}" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="">Status</label><br />
                            <input type="checkbox" name="status"
                                {{ $color->status ? 'checked' : '' }} />Checked=Hidden,Unchecked=Visible
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-sm btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
