<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\InvoiceOrderMailable;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $todayDate = Carbon::now()->format('Y-m-d');
        $orders = Order::when($request->date != null, function ($q) use ($request) {

            return $q->whereDate('created_at', $request->date);
        }, function ($q) use ($todayDate) {

            return $q->whereDate('created_at', $todayDate);
        })->when($request->status != null, function ($q) use ($request) {

            return $q->where('status_message', $request->status);
        })
            ->paginate(10);
        return view('admin.orders.index', compact('orders'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $orderId)
    {
        $order = Order::where('id', $orderId)->first();
        if ($order) {
            return view('admin.orders.show', compact('order'));
        } else {
            return redirect('admin/orders')->with('message', 'Order not found!');
        }
    }

    public function updateOrderStatus(int $orderId, Request $request)
    {
        $order = Order::where('id', $orderId)->first();
        if ($order) {
            $order->update([
                'status_message' => $request->order_status
            ]);
            return redirect('admin/orders/' . $orderId)->with('message', 'Order Status Updated!');
        } else {
            return redirect('admin/orders/' . $orderId)->with('message', 'Order ID not found!');
        }
    }

    public function viewInvoice(int $orderId)
    {
        $order = Order::findOrFail($orderId);
        return view('admin.invoice.generate-invoice', compact('order'));
    }

    public function generateInvoice(int $orderId)
    {
        $order = Order::findOrFail($orderId);
        $data = ['order' => $order];

        $pdf = Pdf::loadView('admin.invoice.generate-invoice', $data);

        $todayDate = Carbon::now()->format('d-m-Y');
        return $pdf->download('invoice-' . $order->id . '-' . $todayDate . '.pdf');
    }

    public function mailInvoice(int $orderId)
    {
        $order = Order::findOrFail($orderId);
        try {
            Mail::to("$order->email")->send(new InvoiceOrderMailable($order));
            return redirect('admin/orders/' . $orderId)->with('message', 'Invoice Mail sent to ' . $order->mail);
        } catch (\Exception $e) {
            return redirect('admin/orders/' . $orderId)->with('message', 'Something went wrong!');
        }
    }
}