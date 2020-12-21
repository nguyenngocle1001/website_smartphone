<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index()
    {
        return view('BackEnd.Roles.index');
    }

    public function add(Request $request)
    {
        if ($request->isMethod('post')) {

            $validatedData = $request->validateWithBag('post', [
                'name' => ['required'],
                'description' => ['required'],
            ]);

            // $name = $request->input('name');
            // $description = $request->input('description');
            // if (empty($name)) {
            //     $errorName = "* Bạn chưa nhập nhập vào tên quyền";
            // }
            // if (empty($description)) {
            //     $errorDescription = "* Bạn chưa nhập mô tả";
            // }
            // echo $name . ' - ' . $description;
        }
        return view('BackEnd.Roles.add');
    }
}