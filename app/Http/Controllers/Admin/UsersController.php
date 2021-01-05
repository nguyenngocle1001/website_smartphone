<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validated;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\File;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->paginate(3);
        return view('BackEnd.Users.index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = DB::table('roles')->select('*')->get();
        return view('BackEnd.Users.add', ['roles' => $roles]);
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
                'username' => 'required',
                'password' => 'required',
                'fullname' => 'required',
                'tel' => 'required',
                'address' => 'required',
                'email' => 'required',
                'avatar' => 'required'
            ],
            [
                'username.required' => 'Bạn chưa nhập tài khoản',
                'password.required' => 'Bạn chưa nhập mât khẩu',
                'fullname.required' => 'Bạn chưa nhập tên',
                'tel.required' => 'Bạn chưa nhập số điện thoại',
                'address.required' => 'Bạn chưa nhập địa chỉ',
                'email.required' => 'Bạn chưa nhập email',
                'avatar.required' => 'Bạn chưa chọn avatar'
            ]
        );

        $username = $request->input('username');
        $password = $request->input('password');
        $fullname = $request->input('fullname');
        $tel = $request->input('tel');
        $address = $request->input('address');
        $email = $request->input('email');
        $roleid = $request->input('role');
        $avatar = $request->file('avatar');
        $name = $avatar->getClientOriginalName();


        $countHasData = DB::table('users')->where('User_Name', $username)->count();
        if ($countHasData <= 0) {
            DB::table('users')->insert([
                'User_Name' => $username,
                'Password' => md5($password),
                'FullName' => $fullname,
                'Phone' => $tel,
                'Address' => $address,
                'Email' => $email,
                'Avatar' => $name,
                'Role_Id' => $roleid
            ]);
            $userid = DB::table('users')->where('User_Name', $username)->first()->User_Id;
            $notice = '<span class="success">Đã thêm thành công</span>';
            $avatar->storeAs('/public/avatars/' . $userid, $name);
        } else $notice = '<span class="error">Trùng tên người dùng</span>';
        return $notice;
        return redirect()->route('adminusers.create')->with('notice', $notice);
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
        $user = DB::table('users')->where('User_Id', $id)->first();
        $roles = DB::table('roles')->select('*')->get();
        return view('BackEnd.Users.edit', ['user' => $user], ['roles' => $roles]);
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
                'fullname' => 'required',
                'tel' => 'required',
                'address' => 'required',
                'email' => 'required',
            ],
            [
                'fullname.required' => 'Bạn chưa nhập tên',
                'tel.required' => 'Bạn chưa nhập số điện thoại',
                'address.required' => 'Bạn chưa nhập địa chỉ',
                'email.required' => 'Bạn chưa nhập email',
            ]
        );

        $fullname = $request->input('fullname');
        $tel = $request->input('tel');
        $address = $request->input('address');
        $email = $request->input('email');
        $roleid = $request->input('role');
        $avatar = $request->file('avatar');
        if ($avatar == null) {
            DB::table('users')->where('User_Id', $id)->update([
                'FullName' => $fullname,
                'Phone' => $tel,
                'Address' => $address,
                'Email' => $email,
                'Role_Id' => $roleid
            ]);
        } else {
            $name = $avatar->getClientOriginalName();
            DB::table('users')->where('User_Id', $id)->update([
                'FullName' => $fullname,
                'Phone' => $tel,
                'Address' => $address,
                'Email' => $email,
                'Avatar' => $name,
                'Role_Id' => $roleid
            ]);
            $avatar->storeAs('/public/avatars/' . $id, $name);
        }

        return 'Đã sửa';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }
}