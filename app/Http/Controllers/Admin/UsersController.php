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
        $users = DB::table('users')->select('*')->get('*');
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
                'birthday' => 'required',
                'tel' => 'required',
                'address' => 'required',
                'email' => 'required',
                'avatar' => 'required'
            ],
            [
                'username.required' => 'Bạn chưa nhập tài khoản',
                'password.required' => 'Bạn chưa nhập mât khẩu',
                'fullname.required' => 'Bạn chưa nhập tên',
                'birthday.required' => 'Bạn chưa chọn ngày sinh',
                'tel.required' => 'Bạn chưa nhập số điện thoại',
                'address.required' => 'Bạn chưa nhập địa chỉ',
                'email.required' => 'Bạn chưa nhập email',
                'avatar.required' => 'Bạn chưa chọn avatar'
            ]
        );

        $username = $request->input('username');
        $password = $request->input('password');
        $fullname = $request->input('fullname');
        $birthday = $request->input('birthday');
        $tel = $request->input('tel');
        $address = $request->input('address');
        $email = $request->input('email');
        $roleid = $request->input('role');
        $avatar = $request->file('avatar');
        $name = $avatar->getClientOriginalName();


        $countHasData = DB::table('users')->where('UserName', $username)->count();
        if ($countHasData <= 0) {
            DB::table('users')->insert([
                'UserName' => $username,
                'Password' => Crypt::encrypt($password),
                'FullName' => $fullname,
                'Birthday' => $birthday,
                'Phone' => $tel,
                'Address' => $address,
                'Email' => $email,
                'Avatar' => $name,
                'RoleId' => $roleid
            ]);
            $userid = DB::table('users')->where('Username', $username)->first()->UserId;
            $notice = '<span class="success">Đã thêm thành công</span>';
            $avatar->storeAs('/public/avatars/' . $userid, $name);
        } else $notice = '<span class="error">Trùng tên người dùng</span>';
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
        $user = DB::table('users')->where('UserId', $id)->first();
        try {
            $user->Password = Crypt::decrypt($user->Password);
        } catch (DecryptException $e) {
        }
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
                'username' => 'required',
                'password' => 'required',
                'fullname' => 'required',
                'birthday' => 'required',
                'tel' => 'required',
                'address' => 'required',
                'email' => 'required',
            ],
            [
                'username.required' => 'Bạn chưa nhập tài khoản',
                'password.required' => 'Bạn chưa nhập mât khẩu',
                'fullname.required' => 'Bạn chưa nhập tên',
                'birthday.required' => 'Bạn chưa chọn ngày sinh',
                'tel.required' => 'Bạn chưa nhập số điện thoại',
                'address.required' => 'Bạn chưa nhập địa chỉ',
                'email.required' => 'Bạn chưa nhập email',
            ]
        );

        $password = $request->input('password');
        $fullname = $request->input('fullname');
        $birthday = $request->input('birthday');
        $tel = $request->input('tel');
        $address = $request->input('address');
        $email = $request->input('email');
        $roleid = $request->input('role');
        $avatar = $request->file('avatar');
        if ($avatar == null) {
            DB::table('users')->where('UserId', $id)->update([
                'Password' => Crypt::encrypt($password),
                'FullName' => $fullname,
                'Birthday' => $birthday,
                'Phone' => $tel,
                'Address' => $address,
                'Email' => $email,
                'RoleId' => $roleid
            ]);
        } else {
            $name = $avatar->getClientOriginalName();
            DB::table('users')->where('UserId', $id)->update([
                'Password' => Crypt::encrypt($password),
                'FullName' => $fullname,
                'Birthday' => $birthday,
                'Phone' => $tel,
                'Address' => $address,
                'Email' => $email,
                'Avatar' => $name,
                'RoleId' => $roleid
            ]);
            $avatar->storeAs('/public/avatars/' . $id, $name);
        }

        return redirect()->route('adminusers.index');
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