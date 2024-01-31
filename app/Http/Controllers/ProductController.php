<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function liste_product(){
        return view('product.list');
    }
}
