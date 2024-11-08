<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        // 8 sản phẩm có giá cao nhất
        $expensiveProducts = DB::table('products')
            ->orderBy('price', 'desc')
            ->take(8)
            ->get();

        // 8 sản phẩm có giá thấp nhất
        $cheapProducts = DB::table('products')
            ->orderBy('price', 'asc')
            ->take(8)
            ->get();

        return view('home', compact('expensiveProducts', 'cheapProducts'));
    }
}
