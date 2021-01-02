<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoadDataController extends Controller
{
    public function LoadDataRoles()
    {
        $roles = DB::table('roles')->select('*')->get('*');

        $data = '';
        if (!$roles->isEmpty()) {
            for ($i = 0; $i < count($roles); $i++)
                $data .= '
                <tr>
                 <td>' . ($i + 1) . '</td>
                 <td>' . $roles[$i]->RoleName . '</td>
                 <td>' . $roles[$i]->Description . '</td>
                 <td class="detroy">
                        <a href="' . route('adminroles.edit', $roles[$i]->RoleId) . '" class="btn btn-sm btn-info">
                            <i class="fa fa-pencil-square-o"></i>
                        </a>
                        <button class="deleteRole btn btn-sm btn-danger detroy__form__btn" data-id="' . $roles[$i]->RoleId . '" data-token="' . csrf_token() . '"><i class="fa fa-trash-o"></i></button>
                        <form class="detroy__form" action="' . route('adminroles.destroy', $roles[$i]->RoleId) . '"
                            method="post">
                            <input type="hidden" name="_token" value="' . csrf_token() . '">
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-sm btn-danger detroy__form__btn"><i class="fa fa-trash-o"></i></button>
                        </form>
                    </td>
                </tr>
                ';
        }
        return $data;
    }
}