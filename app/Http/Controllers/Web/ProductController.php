<?php

namespace App\Http\Controllers\Web;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index() {
        $products = Product::query()->orderBy('updated_at', 'desc')->paginate(5);

        return view('products.index', [

              'products' => $products
        ]);
    }
}
