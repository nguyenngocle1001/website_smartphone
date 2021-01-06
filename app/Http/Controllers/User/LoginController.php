<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class LoginController extends Controller
{
    //
    public function Login(Request $request){
        $user_name = $request->input('username');
        $password = md5($request->input('password'));

        $result = DB::table('users')->where('User_Name',$user_name)->where('Password',$password)->first();

        if($result){
            Session::put('user_name',$result->FullName);
            Session::put('user_id',$result->User_Id);

            return back();
        }
        return 'Sai mật khẩu';
    }
}
