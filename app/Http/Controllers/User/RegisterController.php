<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class RegisterController extends Controller
{
    //
    public function Register(Request $request){
        $user_name = $request->input('UserName');
        $fullname = $request->input('UserName');
        $email = $request->input('Email');
        $password = md5($request->input('Password'));
        $prpassword = md5($request->input('RePassword'));
        $address = 'Không';
        $tel = 'Không';
        $avatar = 'Không';
        $roleid= '4';
        if($password==$prpassword){
            $countHasData = DB::table('users')->where('User_Name', $user_name)->count();
            if ($countHasData <= 0) {
                DB::table('users')->insert([
                    'User_Name' => $user_name,
                    'Password' => $password,
                    'FullName' => $fullname,
                    'Phone' => $tel,
                    'Address' => $address,
                    'Email' => $email,
                    'Avatar' => $avatar,
                    'Role_Id' => $roleid
                ]);
                return back();
        
            }
            else{
                Session::put('message','tên đã được sử dụng');
                return back();
            }
        }
        else{
            Session::put('message','nhập lại mật khẩu không trùng khớp');
            return back();
        }

    }
}
