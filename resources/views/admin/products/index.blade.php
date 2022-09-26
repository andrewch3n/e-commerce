@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12">
        @if (session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
        @endif

        <div class="card">
            <div class="card-header justify-content-between">
                <h3 class="d-inline-flex p-2 mt-2">Add Product</h3>
                <a href="{{ url('admin/products/create') }}" class="btn btn-primary btn-sm text-white float-end mt-2">
                    <i class="mdi mdi-plus menu-icon align-middle"></i>Add Product
                </a>
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($products as $product)
                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>
                                    @if ($product->category)
                                        {{ $product->category->name }}
                                    @else
                                        No Category
                                    @endif

                                </td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->selling_price }}</td>
                                <td>{{ $product->quantity }}</td>
                                <td>{{ $product->status=='1'?'hidden':'visible' }}</td>
                                <td>
                                    <a href="{{ url('admin/products/'.$product->id.'/edit') }}" class="btn btn-sm btn-warning">
                                        <i class="mdi mdi-pencil menu-icon"></i>
                                    </a>
                                    <a href="{{ url('admin/products/'.$product->id.'/delete') }}" onclick="return confirm('Are you sure you want to delete?')" class="btn btn-sm btn-danger">
                                        <i class="mdi mdi-delete menu-icon"></i>
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7">No Products Available!</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
