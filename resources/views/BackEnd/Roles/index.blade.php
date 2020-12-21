@extends('masterbe')
@section('title')
    Danh sách quyền
@endsection
@section('content')
<div class="row">
    <div class="col-md-8">
        <a href="{{ route('addroles') }}" class="btn btn-primary">Thêm mới</a>
    </div>
    <div class="col-md-4">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Tìm kiếm...">
            <div class="input-group-append">
                <span class="input-group-text" id="basic-addon2"><i class="fa fa-search"></i></span>
            </div>
        </div>
    </div>
</div>
<table class="table table-bordered table-hover mt-3">
    <thead>
        <tr>
            <th>STT</th>
            <th>Tên Quyền</th>
            <th>Mô Tả</th>
            <th>#</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1</td>
            <td>admin</td>
            <td>đây là admin</td>
            <td>
                <a href="role-edit.html" class="btn btn-sm btn-info">
                    <i class="fa fa-pencil-square-o"></i>
                </a>
                <a href="#" class="btn btn-sm btn-danger">
                    <i class="fa fa-trash-o"></i>
                </a>
            </td>
        </tr>
       
    </tbody>
</table>
@endsection