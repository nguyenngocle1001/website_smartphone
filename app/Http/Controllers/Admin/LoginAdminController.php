<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

use Session;
use App\Http\Support\Facades\Redirect;
session_start();

class LoginAdminController extends Controller
{
    public function index(){
        return view('BackEnd/login');
    }
    public function dashboard(Request $request){
        $user_name = $request->username;
        $pass = md5($request->password);
        if($user_name==""){
            Session::put('errorU','Chưa nhập tên đăng nhập');
            return view('BackEnd/login');
        }
        if($pass==null){
            Session::put('errorP','Chưa nhập password');
            return view('BackEnd/login');
        }

        $resul = DB::table('users')->where('User_Name',$user_name)->where('Password',$pass)->first();
        if($resul){
            Session::put('admin_name',$resul->FullName);
            Session::put('admin_id',$resul->User_Id);
            return Redirect('admin');
        }
        else{
            Session::put('message','Sai mật khẩu hoặc tài khoản');
            return view('BackEnd/login');
        }
    }
    public function logout(){
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return view('BackEnd/login');
    }
}
