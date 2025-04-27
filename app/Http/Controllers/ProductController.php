<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function allByType($type)
    {
        Product::with('category')->where('type', $type)->get();
    }
}
