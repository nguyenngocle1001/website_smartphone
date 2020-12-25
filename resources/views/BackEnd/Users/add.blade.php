@extends('masterbe')
@section('title')
    Thêm mới người dùng
@endsection
@section('content')
<form method="post" action="{{ route('adminusers.store') }}"  enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label>Tài khoản</label>
                <input type="text" name="username" class="form-control" placeholder="Tên tài khoản" />
            </div>
            <div class="form-group">
                <label>Mật khẩu</label>
                <input type="password" name="password" class="form-control" placeholder="Mật khẩu" />  
            </div>
            <div class="form-group">
                <label>Họ tên</label>
                <input type="text" name="fullname" class="form-control" placeholder="fullname" /> 
            </div>
            <div class="form-group">
                <label>Ngày sinh</label>
                <input type="date" name="birthday" class="form-control"/>
            </div>
            <div class="form-group">
                <label>Phân quyền</label>
                <select name="role" class="form-control">
                    @foreach ($roles as $role)
                        <option value="{{ $role->RoleId }}">{{ $role->RoleName }}</option>
                    @endforeach
                </select>
            </div>
            
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label>Số điện thoại</label>
                <input type="text" name="tel" class="form-control" placeholder="Số điện thoại" />
            </div>
            <div class="form-group">
                <label>Địa chỉ</label>
                <input type="text" name="address" class="form-control" placeholder="Địa chỉ" />
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="email" />
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
        @if(session('notice'))
        {!! session('notice') !!}
    @endif
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