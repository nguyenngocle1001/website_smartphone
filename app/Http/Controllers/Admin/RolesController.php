<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\DB;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = DB::table('roles')->get();
        return view('BackEnd.Roles.index', ['roles' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('BackEnd.Roles.add');
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
            'name' => 'required',
            'description' => 'required',
        ], [
            'name.required' => 'Chưa nhập tên quyền',
            'description.required' => 'Chưa nhập mô tả quyền'
        ]);

        $name = $request->input('name');
        $description = $request->input('description');
        $countHasData = DB::table('roles')->where('Role_Name', $name)->count();
        if ($countHasData <= 0) {
            DB::table('roles')->insert([
                'Role_Name' => $name,
                'Descripton' => $description
            ]);
            $notice = '<span class="success">Đã thêm thành công</span>';
        } else $notice = '<span class="error">Trùng tên quyền</span>';
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
        $role = DB::table('roles')->where('Role_ID', $id)->first();
        return view('BackEnd.Roles.edit', ['role' => $role]);
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
                'name' => 'required',
                'description' => 'required',
            ],
            [
                'name.required' => 'Chưa nhập tên quyền',
                'description.required' => 'Chưa nhập mô tả quyền'
            ]
        );

        $name = $request->input('name');
        $description = $request->input('description');

        $countHasData = DB::table('roles')->where('Role_Name', $name)->where('Role_Id', '<>', $id)->get()->count();
        if ($countHasData <= 0) {
            DB::table('roles')->where('Role_Id', $id)->update([
                'Role_Name' => $name,
                'Descripton' => $description
            ]);
            return '<span class="success">Cập nhật thành công</span>';
        }
        return '<span class="error">Trùng tên quyền</span>';
        // return back()->with('notice', $notice);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = DB::table('users')->where('Role_ID', $id)->get();
        if (count($data) == 0) {
            DB::table('roles')->where('Role_Id', $id)->delete();
            $notice = 'Đã xóa';
        } else $notice = 'Quyền này không thể xóa';
        return back()->with($notice);
    }
}