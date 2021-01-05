<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function NewProduct()
    {
        return view('FrontEnd.Products.NewProducts');
    }
    public function HotProduct()
    {
        return view('FrontEnd.Products.HotProducts');
    }
    public function DetailProduct()
    {
        return view('FrontEnd.Products.DetailProduct');
    }
}