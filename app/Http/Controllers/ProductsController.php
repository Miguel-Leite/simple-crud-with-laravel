<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {

        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create() {

        return view('products.create');
    }

    public function store(Request $request) {
        
        $product = new Product();

        $product->title = $request->title;
        $product->country = $request->country;
        $product->price = $request->price;

        $product->save();

        return redirect()->route('products.index');

    }


    public function edit($id) {

        $product = Product::find($id);

        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id) {

        $product = Product::find($id);

        $product->update($request->all());

        return redirect()->route('products.index');
    }

    public function destroy(int $id) {

        $product = Product::find($id);

        $product->delete();

        return redirect()->route('products.index');
    }
}
