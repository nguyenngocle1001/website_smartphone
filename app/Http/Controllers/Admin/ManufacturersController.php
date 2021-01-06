<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;

class ManufacturersController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $manufacturers = DB::table('manufacturers')->get();
        return view('BackEnd.Manufacturers.index', ['manufacturers' => $manufacturers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BackEnd.Manufacturers.add');
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
            'manu_name' => 'required',

        ], [
            'manu_name.required' => 'Chưa nhập tên nhãn hàng',

        ]);

        $name = $request->input('manu_name');

        $countHasData = DB::table('manufacturers')->where('Name', $name)->count();
        if ($countHasData <= 0) {
            DB::table('manufacturers')->insert([
                'Name' => $name,

            ]);
            $notice = '<span class="success">Đã thêm thành công</span>';
        } else $notice = '<span class="error">Trùng tên thương hiệu</span>';
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
        $manufacturers = DB::table('manufacturers')->where('Manu_ID', $id)->first();
        return view('BackEnd.Manufacturers.edit', ['manufacturers' => $manufacturers]);
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
                'manu_name' => 'required',

            ],
            [
                'manu_name.required' => 'Chưa nhập tên quyền',

            ]
        );

        $name = $request->input('manu_name');


        $countHasData = DB::table('manufacturers')->where('Name', $name)->where('Manu_Id', '<>', $id)->get()->count();
        if ($countHasData <= 0) {
            DB::table('manufacturers')->where('Manu_Id', $id)->update([
                'Name' => $name,

            ]);
            return '<span class="success">Cập nhật thành công</span>';
        }
        return '<span class="error">Trùng tên quyền</span>';
        // return back()->with('notice', $notice);
    }
}
