<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function store(Request $request) {
        // dd($request->all());
        $name = $request->name;
        $description = $request->description;
        $price = $request->price;
        // $product = new Product();
        // $product->name = $name;
        // $product->description = $description;
        // $product->price = $price;
        // dd($product);
        // $product->save();
        Product::create(['name' => $name, 'description' => $description, 'price' => $price]);
        return redirect()->back();
    }
    public function index() {
        $products = Product::all();
        return view('product.index', ['products' => $products]);
    }
}
