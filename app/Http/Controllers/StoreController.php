<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    // Obtener todos los almacenes
    public function index(){
        $stores = Store::get();
        return $stores;
    }
}
