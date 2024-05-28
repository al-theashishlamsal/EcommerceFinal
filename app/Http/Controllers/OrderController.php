<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the orders.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieve all orders
        $orders = Order::all();
        
        // Return a view with the orders data
        return view('backend.order.index', ['orders' => $orders]);
    }

    /**
     * Show the form for creating a new order.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Fetch all customers
        $customers = Customer::all();
        return view('backend.order.create', compact('customers'));
    }

    /**
     * Store a newly created order in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge([
            'is_paid' => $request->has('is_paid'),
            'is_shipped' => $request->has('is_shipped'),
            'is_delivered' => $request->has('is_delivered'),
        ]);

        // Validate the incoming request
        $validatedData = $request->validate([
            'user_id' => 'required|exists:customers,id',
            'order_date' => 'required|date',
            'total_amount' => 'required|numeric',
            'payment_method' => 'required|string|max:255',
            'payment_status' => 'required|string|in:pending,completed,cancelled',
            'shipping_address' => 'required|string|max:255',
            'shipping_country' => 'required|string|max:255',
            'postal_code' => 'required|string|max:20',
            'shipping_cost' => 'required|numeric',
            'tax_amount' => 'required|numeric',
            'order_status' => 'required|string|in:pending,processing,shipped,delivered,cancelled',
            'is_paid' => 'required|boolean',
            'is_shipped' => 'required|boolean',
            'is_delivered' => 'required|boolean',
            'delivery_date' => 'nullable|date',
            'delivery_time' => 'nullable|string|max:5',
        ]);

        // Create a new order
        Order::create($validatedData);

        // Redirect to the orders index
        return redirect()->route('backend.orders.index');
    }

    /**
     * Show the form for editing the specified order.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        // Fetch all customers for editing
        $customers = Customer::all();
        return view('backend.order.edit', compact('order', 'customers'));
    }

    /**
     * Update the specified order in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        // Set default values for checkboxes
        $request->merge([
            'is_paid' => $request->has('is_paid'),
            'is_shipped' => $request->has('is_shipped'),
            'is_delivered' => $request->has('is_delivered'),
        ]);

        // Validate the incoming request
        $validatedData = $request->validate([
            'user_id' => 'required|exists:customers,id',
            'order_date' => 'required|date',
            'total_amount' => 'required|numeric',
            'payment_method' => 'required|string|max:255',
            'payment_status' => 'required|string|in:pending,completed,cancelled',
            'shipping_address' => 'required|string|max:255',
            'shipping_country' => 'required|string|max:255',
            'postal_code' => 'required|string|max:20',
            'shipping_cost' => 'required|numeric',
            'tax_amount' => 'required|numeric',
            'order_status' => 'required|string|in:pending,processing,shipped,delivered,cancelled',
            'is_paid' => 'required|boolean',
            'is_shipped' => 'required|boolean',
            'is_delivered' => 'required|boolean',
            'delivery_date' => 'nullable|date',
            'delivery_time' => 'nullable|string|max:5',
        ]);

        // Update the order
        $order->update($validatedData);

        // Redirect to the orders index
        return redirect()->route('backend.orders.index');
    }

    /**
     * Remove the specified order from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        // Delete the order
        $order->delete();

        // Redirect to the orders index
        return redirect()->route('backend.orders.index');
    }
}
