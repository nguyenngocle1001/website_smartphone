<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function Index()
    {
        $arrProduct = array();
        $categorys = DB::table('categorys')->get();
        foreach ($categorys as $category) {
            $arrProduct[$category->Cate_Id] = DB::table('products')->where('Cate_Id', $category->Cate_Id)->take(3)->get();
        }
        $newProducts = DB::table('products')->orderByDesc('Prod_Id')->take(4)->get();

        return view('FrontEnd.index', compact('categorys', 'arrProduct', 'newProducts'));
    }

    public function LoadNavigation()
    {
        $categorys = DB::table('categorys')->get();
        $manufactures = DB::table('manufacturers')->get();
        return view('FrontEnd.PartialView.Navigation', compact('categorys', 'manufactures'))->render();
    }
}