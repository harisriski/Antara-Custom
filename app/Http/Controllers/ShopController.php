<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function index() {
        return view('shop.index');
    }

    public function show() {
        return view('shop.show');
    }
}
