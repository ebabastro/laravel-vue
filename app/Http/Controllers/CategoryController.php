<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    // Obtener todas las categories
    public function index(){
        $categories = Category::get();

        return $categories;
    }
}
