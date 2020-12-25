@extends('masterbe')
@section('title')
    Chỉnh sửa người dùng
@endsection
@section('content')
<form method="POST" action="{{ route('adminusers.update', $user->UserId) }}" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="_method" value="PATCH">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Tài khoản</label>
                <input type="text" name="username" readonly value="{{ $user->UserName }}" class="form-control" placeholder="Tên tài khoản" />
            </div>
            <div class="form-group">
                <label>Mật khẩu</label>
                <input type="password" name="password" value="{{ $user->Password }}" class="form-control" placeholder="Mật khẩu" />  
            </div>
            <div class="form-group">
                <label>Họ tên</label>
                <input type="text" name="fullname" value="{{ $user->FullName }}" class="form-control" placeholder="fullname" /> 
            </div>
            <div class="form-group">
                <label>Ngày sinh</label>
                <input type="date" name="birthday" value="{{substr($user->Birthday, 0, 10)}}" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Phân quyền</label>
                <select name="role" class="form-control">
                    @foreach ($roles as $role)
                        @if ($user->RoleId === $role->RoleId)
                        <option selected value="{{ $role->RoleId }}">{{ $role->RoleName }}</option>
                        @else
                        <option value="{{ $role->RoleId }}">{{ $role->RoleName }}</option>
                        @endif
                    @endforeach
                </select>
            </div>
            
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Số điện thoại</label>
                <input type="text" name="tel" value="{{$user->Phone}}" class="form-control" placeholder="Số điện thoại" />
            </div>
            <div class="form-group">
                <label>Địa chỉ</label>
                <input type="text" name="address" value="{{$user->Address}}" class="form-control" placeholder="Địa chỉ" />
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="{{$user->Email}}" class="form-control" placeholder="email" />
            </div>
            <div class="form-group">
                <label>Avatar</label>
                <input type="file" accept="image/x-png,image/jpeg,image/jpg" name="avatar" class="form-control"/>
            </div>
        </div>
        <div class="col-12 mt-3">
            <button type="submit" class="btn btn-success">Lưu lại</button>
            <a class="btn btn-secondary" href="user-list.html">Quay lại</a>
        </div>
    </div>
</form>
@if ($errors->any())
    <div class="danger__box alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection