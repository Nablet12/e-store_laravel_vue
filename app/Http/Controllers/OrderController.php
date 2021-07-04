<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view ('Order.index', compact('orders'));
    }

    public function create()
    {
        return view ('Order.create');
    }

    public function store(Request $request)
    {
        $order = Order::create($request -> all());
        return redirect('Order');
    }

    public function show($id)
    {
        $order = Order::find($id);
        return view ('Order.show', compact('order'));
    }

    public function edit($id)
    {
        $order = Order::all($id);
        return view('Order.edit', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order -> update($request -> all());
        return redirect('Order/');
    }

    public function destroy($id)
    {
        Order::find($id) -> delete();
        return redirect('order');
    }
}
