<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return $products;
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return $product;
    }

    public function store(Request $request)
    {
        $createProduct = Product::create($request->all());
        return $createProduct;
    }

    public function update(Request $request, $id)
    {
        $updateProduct = Product::findOrFail($id)->update($request->all());
        return $updateProduct;
    }

    public function destroy($id)
    {
        $deleteProduct = Product::findOrFail($id)->delete();
        return $deleteProduct;
    }
}
