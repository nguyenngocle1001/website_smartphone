@extends('masterbe')
@section('title')
    Danh sách người dùng
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8">
            <a href="{{ route('adminusers.create') }}" class="btn btn-primary">Thêm mới</a>
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
                <th>Họ Tên</th>
                <th>Hình đại diện</th>
                <th>Email</th>
                <th>Số ĐT</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody id="loadData">
            @for ($i = 0; $i < count($users); $i++)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $users[$i]->FullName }}</td>
                    <td>
                        <div class="image"
                            style="background-image: url({{ URL::asset('storage/avatars/' . $users[$i]->User_Id . '/' . $users[$i]->Avatar) }})">
                        </div>
                    </td>
                    <td>{{ $users[$i]->Email }}</td>
                    <td>{{ $users[$i]->Phone }}</td>
                    <td>
                        <a href="{{ route('adminusers.edit', $users[$i]->User_Id) }}" class="btn btn-sm btn-info">
                            <i class="fa fa-pencil-square-o"></i>
                        </a>
                        <form class="detroy__form" action="{{ route('adminroles.destroy', $users[$i]->User_Id) }}"
                            method="post">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-sm btn-danger detroy__form__btn"><i class="fa fa-trash-o"></i></button>
                        </form>
                    </td>
                </tr>
            @endfor
        </tbody>
    </table>
    <div>
        {{ $users->links() }}
    </div>
@endsection
