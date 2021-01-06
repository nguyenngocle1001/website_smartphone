<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function Index()
    {
        $products = DB::table('products')->paginate(12);
        return view('FrontEnd.Products.Products', compact('products'));
    }

    public function DetailProduct($id)
    {
        $product = DB::table('products')->where('Prod_Id', $id)->first();
        $comments = DB::table('coments')->join('users', 'users.User_Id', '=', 'coments.User_id')->where('Prod_id', $id)->get();
        $relatedPRoducts = DB::table('products')->where('Prod_id', '<>', $id)->take(4)->get();
        return view('FrontEnd.Products.DetailProduct', compact('product', 'comments', 'relatedPRoducts'));
    }

    public function Search(Request $request)
    {
        $search = $request->input('search');
        $products = DB::table('products')->where('Prod_Name', 'like', '%' . $search . '%')->paginate(12);
        return view('FrontEnd.Products.Products', compact('products', 'search'));
    }

    public function ProductCategory($id)
    {
        $products = DB::table('products')->where('Cate_Id', $id)->paginate(12);
        return view('FrontEnd.Products.Products', compact('products'));
    }

    public function ProductManufacture($id)
    {
        $products = DB::table('products')->where('Manu_Id', $id)->paginate(12);
        return view('FrontEnd.Products.Products', compact('products'));
    }
}