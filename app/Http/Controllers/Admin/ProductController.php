<?php

namespace App\Http\Controllers\Admin;

use App\Model\Product;
use App\Model\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(9);

        return view('admin.product.index', compact('products'));
    }

    public function create(Product $products)
    {
        $categories = Category::all();

        return view('admin.product.create', compact(['products', 'categories']));
    }

    public function store(Request $request, Product $product)
    {
        // dd($request->all());
        $product->create($request->all());
        $product->category()->sync($request->category);

        return redirect()->route('admin.product.index')
                ->with('success', 'Product Created Successfully');
    }

    public function show(Product $product)
    {
    }

    public function edit(Product $product)
    {
    }

    public function update(Request $request, Product $product)
    {
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('admin.product.index')
        ->with('success', 'Product Deleted Successfully');
    }
}
