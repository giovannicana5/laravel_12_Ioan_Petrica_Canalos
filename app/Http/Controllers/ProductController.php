<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Http\Requests\ProductRequest;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    // public function __construct() {
    //     $this->middleware('auth');
    // }
    public function create() {
        return view('product.create');
    }
    public function store(ProductRequest $request) {
        // dd(Auth::user()->id);
        // dd($request->all());
        // dd($request->all());
        $name = $request->name;
        $description = $request->description;
        $price = $request->price;
        $img = null;
        if($request->file('img')) {
            $img = $request->file('img')->store('img', 'public');
        }
        // dd($request->all());
        // $product = new Product();
        // $product->name = $name;
        // $product->description = $description;
        // $product->price = $price;
        // dd($product);
        // $product->save();
        Product::create(['name' => $name, 'description' => $description, 'price' => $price, 'img' => $img, 'user_id' => Auth::user()->id]);
        return redirect()->back()->with('message', 'Prodotto inserito');
    }
    public function index() {
        $products = Product::all();
        return view('product.index', ['products' => $products]);
    }
}
