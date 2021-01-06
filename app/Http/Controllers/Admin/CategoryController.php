<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorys = DB::table('categorys')->get();
        return view('BackEnd.Categorys.index', ['categorys' => $categorys]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BackEnd.Categorys.add');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'cate_name' => 'required',

        ], [
            'cate_name.required' => 'Chưa nhập tên quyền',

        ]);

        $name = $request->input('cate_name');

        $countHasData = DB::table('categorys')->where('Cate_name', $name)->count();
        if ($countHasData <= 0) {
            DB::table('categorys')->insert([
                'Cate_name' => $name,

            ]);
            $notice = '<span class="success">Đã thêm thành công</span>';
        } else $notice = '<span class="error">Trùng tên loại hàng</span>';
        return $notice;
        //====================//
        // $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        // ]);

        // $name = $request->input('name');
        // $description = $request->input('description');
        // $countHasData = DB::table('roles')->where('RoleName', $name)->count();
        // if ($countHasData <= 0) {
        //     DB::table('roles')->insert([
        //         'RoleName' => $name,
        //         'Description' => $description
        //     ]);
        //     $notice = '<span class="success">Đã thêm thành công</span>';
        // } else $notice = '<span class="error">Trùng tên quyền</span>';
        // return redirect()->route('adminroles.create')->with('notice', $notice);
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
        $cate = DB::table('categorys')->where('Cate_ID', $id)->first();
        return view('BackEnd.Categorys.edit', ['cate' => $cate]);
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
                'cate_name' => 'required',

            ],
            [
                'cate_name.required' => 'Chưa nhập tên quyền',

            ]
        );

        $name = $request->input('cate_name');


        $countHasData = DB::table('categorys')->where('Cate_name', $name)->where('Cate_Id', '<>', $id)->get()->count();
        if ($countHasData <= 0) {
            DB::table('categorys')->where('Cate_Id', $id)->update([
                'Cate_name' => $name,

            ]);
            return '<span class="success">Cập nhật thành công</span>';
        }
        return '<span class="error">Trùng tên quyền</span>';
        // return back()->with('notice', $notice);
    }

}