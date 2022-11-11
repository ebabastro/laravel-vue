<?php

namespace App\Http\Controllers;

use App\Models\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    // Obtener todas las subcategories
    public function index(){
        $subcategories = Subcategory::get();
        return $subcategories;
    }
}
