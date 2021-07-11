<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ShopController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index() {
        //pagination
        $products = Product::paginate(6);
        return view('shop.index', compact('products'));
    }

    public function show($id) {
        $product = Product::findOrFail($id);
        return view('shop.show', compact('product'));
    }
}
