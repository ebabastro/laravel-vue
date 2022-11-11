<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Obtener todos los products
    public function index(){
        $products = Product::get();
        return $products;
    }
}
