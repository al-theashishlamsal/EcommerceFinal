<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the payments.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Retrieve all payments
        $payments = Payment::all();
        
        // Return a view with the payments data
        return view('backend.payment.index', ['payments' => $payments]);
    }

    /**
     * Show the form for creating a new payment.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $orders = Order::all();
        return view('backend.payment.create', compact('orders'));
    }

    /**
     * Store a newly created payment in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'order_id' => 'required|exists:orders,id',
            'amount' => 'required|numeric|min:0',
            'payment_method' => 'required|string',
            'payment_status' => 'required|string',
        ]);

        // Create a new payment
        $payment = Payment::create($validatedData);

        // Redirect to the payments index or do something else
        return redirect()->route('backend.payments.index');
    }

    /**
     * Show the form for editing the specified payment.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        // Return a view for editing the specified payment
        return view('backend.payment.edit', ['payment' => $payment]);
    }

    /**
     * Update the specified payment in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'order_id' => 'required|exists:orders,id',
            'amount' => 'required|numeric|min:0',
            'payment_method' => 'required|string',
            'payment_status' => 'required|string',
        ]);

        // Update the payment
        $payment->update($validatedData);

        // Redirect to the payments index or do something else
        return redirect()->route('backend.payments.index');
    }

    /**
     * Remove the specified payment from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        // Delete the payment
        $payment->delete();

        // Redirect to the payments index or do something else
        return redirect()->route('backend.payments.index');
    }
}
