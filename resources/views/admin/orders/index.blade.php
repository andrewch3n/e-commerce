@extends('layouts.admin')

@section('title', 'My Orders')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header justify-content-between">
                    <h3 class="d-inline-flex p-2 mt-2">My Orders</h3>
                </div>
                <div class="card-body">

                    <form action="" method="GET">
                        <div class="row">
                            <div class="col-md-3">
                                <label class="pb-2">Filter by Date</label>
                                <input type="date" name="date" value="{{ Request::get('date') ?? date('Y-m-d') }}"
                                    class="form-control">
                            </div>
                            <div class="col-md-3">
                                <label class="pb-2">Filter by Status</label>
                                <select name="status" class="form-select">
                                    <option value="">Select Status</option>
                                    <option value="in progress"
                                        {{ Request::get('status') == 'in progress' ? 'selected' : '' }}>In progress</option>
                                    <option value="completed" {{ Request::get('status') == 'completed' ? 'selected' : '' }}>
                                        Completed</option>
                                    <option value="pending" {{ Request::get('status') == 'pending' ? 'selected' : '' }}>
                                        Pending</option>
                                    <option value="canceled" {{ Request::get('status') == 'canceled' ? 'selected' : '' }}>
                                        Canceled</option>
                                    <option value="out-for-delivery"
                                        {{ Request::get('status') == 'out-for-delivery' ? 'selected' : '' }}>Out for
                                        delivery
                                    </option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <br />
                                <button type="submit" class="btn btn-primary btn-sm mt-2">Filter</button>
                            </div>
                        </div>
                    </form>
                    <hr>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Tracking No.</th>
                                    <th>UserName</th>
                                    <th>Payment Method</th>
                                    <th>Ordered Date</th>
                                    <th>Status Message</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($orders as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->tracking_no }}</td>
                                        <td>{{ $item->fullname }}</td>
                                        <td>{{ $item->payment_mode }}</td>
                                        <td>{{ $item->created_at->format('Y-m-d') }}</td>
                                        <td>{{ $item->status_message }}</td>
                                        <td>
                                            <a href="{{ url('admin/orders/' . $item->id) }}" class="btn btn-info btn-sm">
                                                <i class="mdi mdi-information menu-icon align-middle"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="7" class="text-center">No Orders Available!</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>

                        <div class="mx-auto">
                            {{ $orders->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
