<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        $order = Order::all();
        return view ('order.index', compact('orders'));
    }

    public function create()
    {
        return view ('order.create');
    }

    public function store(Request $request)
    {
        $order = Order::create($request -> all());
        return redirect('order');
    }

    public function show($id)
    {
        $order = Order::find($id);
        return view ('order.show', compact('project'));
    }

    public function edit($id)
    {
        $order = Order::all($id);
        return view('order.edit', compact('order'));
    }

    public function update(Request $request, $id)
    {
        $order = Order::find($id);
        $order -> update($request -> all());
        return redirect('order/');
    }

    public function destroy($id)
    {
        Order::find($id) -> delete();
        return redirect('order');
    }
}
