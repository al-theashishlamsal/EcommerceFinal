@extends('layouts2.superadmin')

@section('content')
    <div class="container">
        @isset($error)
            <div class="alert alert-danger">{{ $error }}</div>
        @else
            <h1>Orders</h1>

            <a href="{{ route('backend.orders.create') }}" class="btn btn-primary mb-3">Create Order</a>

            <table class="table">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Order Date</th>
                        <th>Total Amount</th>
                        <th>Payment Method</th>
                        <th>Payment Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($orders as $order)
                        <tr>
                            <td>{{ $order->user->name }}</td>
                            <td>{{ $order->order_date }}</td>
                            <td>{{ $order->total_amount }}</td>
                            <td>{{ $order->payment_method }}</td>
                            <td>{{ $order->payment_status }}</td>
                            <td>
                                <a href="{{ route('backend.orders.edit', $order->id) }}" class="btn btn-warning">Edit</a>

                                <form action="{{ route('backend.orders.destroy', $order->id) }}" method="POST"
                                    style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6">No orders found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        @endisset
    </div>
@endsection
