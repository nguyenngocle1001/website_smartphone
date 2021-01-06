<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validated;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\File;

class ProductsController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products')->paginate(3);
        return view('BackEnd.Products.index', ['products' => $products]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorys = DB::table('categorys')->select('*')->get();
        $manufacturers = DB::table('manufacturers')->select('*')->get();
        return view('BackEnd.Products.add', compact('categorys', 'manufacturers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'prodname' => 'required',
                'price' => 'required',
                'decription' => 'required',
                'image1' => 'required',
                'image2' => 'required',
                'image3' => 'required',
                'image4' => 'required'
            ],
            [
                'prodname.required' => 'Bạn chưa nhập tên sản phẩm',
                'price.required' => 'Bạn chưa nhập giá bán',
                'decription.required' => 'Bạn chưa nhập mô tả',
                'image1.required' => 'Bạn chưa chọn hình mô tả 1',
                'image2.required' => 'Bạn chưa chọn hình mô tả 2',
                'image3.required' => 'Bạn chưa chọn hình mô tả 3',
                'image4.required' => 'Bạn chưa chọn hình mô tả 4'
            ]
        );

        $prodname = $request->input('prodname');
        $price = $request->input('price');
        $decription = $request->input('decription');
        $image1 = $request->file('image1');
        $image2 = $request->file('image2');
        $image3 = $request->file('image3');
        $image4 = $request->file('image4');
        $cateid = $request->input('category');
        $manuid = $request->input('manufacturers');
        
        $name1 = $image1->getClientOriginalName();
        $name2 = $image2->getClientOriginalName();
        $name3 = $image3->getClientOriginalName();
        $name4 = $image4->getClientOriginalName();


        $countHasData = DB::table('products')->where('Prod_Name', $prodname)->count();
        if ($countHasData <= 0) {
            DB::table('products')->insert([
                'Prod_Name' => $prodname,
                'Price' => $price,
                'Decription' => $decription,
                'image1' => $name1,
                'image2' => $name2,
                'image3' => $name3,
                'image4' => $name4,
                'Cate_Id' => $cateid,
                'Manu_Id' => $manuid
            ]);
            $prodid = DB::table('products')->where('Prod_Name', $prodname)->first()->Prod_Id;
            $notice = '<span class="success">Đã thêm thành công</span>';
            $image1->storeAs('/public/products/' . $prodid, $name1);
            $image2->storeAs('/public/products/' . $prodid, $name2);
            $image3->storeAs('/public/products/' . $prodid, $name3);
            $image4->storeAs('/public/products/' . $prodid, $name4);
        } else $notice = '<span class="error">Trùng tên người dùng</span>';
        return $notice;
        return redirect()->route('adminproducts.create')->with('notice', $notice);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = DB::table('products')->where('Prod_Id', $id)->first();
        $categorys = DB::table('categorys')->select('*')->get();
        $manufacturers = DB::table('manufacturers')->select('*')->get();
        return view('BackEnd.Products.edit', compact('products','categorys', 'manufacturers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'prodname' => 'required',
                'price' => 'required',
                'decription' => 'required',

            ],
            [
                'prodname.required' => 'Bạn chưa nhập tên sản phẩm',
                'price.required' => 'Bạn chưa nhập giá bán',
                'decription.required' => 'Bạn chưa nhập mô tả',

            ]
        );

        $prodname = $request->input('prodname');
        $price = $request->input('price');
        $decription = $request->input('decription');
        $image1 = $request->file('image1');
        $image2 = $request->file('image2');
        $image3 = $request->file('image3');
        $image4 = $request->file('image4');
        $cateid = $request->input('category');
        $manuid = $request->input('manufacturers');
;
        $name1 = $image1->getClientOriginalName();
        $name2 = $image2->getClientOriginalName();
        $name3 = $image3->getClientOriginalName();
        $name4 = $image4->getClientOriginalName();

        
        DB::table('products')->where('Prod_Id', $id)->update([
            'Prod_Name' => $prodname,
            'Price' => $price,
            'Decription' => $decription,
            
            'Cate_Id' => $cateid,
            'Manu_Id' => $manuid
        ]);

        if($image1!=null){
            DB::table('products')->where('Prod_Id', $id)->update([
                'image1' => $name1,
               
                
            ]);
            $image1->storeAs('/public/products/' . $id, $name1);
        }
        if($image2!=null){
            DB::table('products')->where('Prod_Id', $id)->update([
                'image2' => $name2,
                
                
            ]);
            $image2->storeAs('/public/products/' . $id, $name2);
        }
        if($image3!=null){
            DB::table('products')->where('Prod_Id', $id)->update([
                'image3' => $name3,
                
               
            ]);
            $image3->storeAs('/public/products/' . $id, $name3);
        }
        if($image4!=null){
            DB::table('products')->where('Prod_Id', $id)->update([
                'image4' => $name4,
                
            ]);
            $image4->storeAs('/public/products/' . $id, $name4);
        }

        return 'Đã sửa';
    }
}
