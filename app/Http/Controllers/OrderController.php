<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {
        return Order::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $order = Order::create($request -> all());
        return $order;
    }

    public function show($id)
    {
        $order = Order::find($id);
        return $order;
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $order = Order::find($id) -> update($request -> all());
        return $order;
    }

    public function destroy($id)
    {
        $order = Order::find($id) -> delete();
        return $order;
    }
}
