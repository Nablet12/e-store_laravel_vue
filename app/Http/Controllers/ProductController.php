<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        return Product::all();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return $product;
    }

    public function show($id)
    {
        $product = Product::find($id);
        return $product;
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id) -> update($request -> all());
    }

    public function destroy($id)
    {
        $product = Product::find($id) -> delete();
        return $product;
    }
}
