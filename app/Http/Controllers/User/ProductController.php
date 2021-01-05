<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function Index()
    {
        $products = DB::table('products')->paginate(9);
        return view('FrontEnd.Products.Products', compact('products'));
    }

    public function DetailProduct()
    {

        return view('FrontEnd.Products.DetailProduct');
    }
}