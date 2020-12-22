@extends('masterbe')
@section('title')
    Chỉnh sửa quyền
@endsection
@section('content')
<form method="POST" action="{{route('adminroles.update', $role->RoleId)}}">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="form-group">
                <label>Tên quyền</label>
                <input type="text" value="{{ $role->RoleName }}" name="name" class="form-control" placeholder="name" />
                @error('name')
                <span class="error">* Bạn chưa nhập tên quyền</span>
                @enderror  
            </div>
            <div class="form-group">
                <label>Mô tả</label>
                <input type="text" value="{{ $role->Description }}" name="description" class="form-control" placeholder="description" />
                @error('description')
                <span class="error">* Bạn chưa nhập mô tả</span>
                @enderror  
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Lưu lại</button>
                <a class="btn btn-secondary" href="role-list.html">Quay lại</a>
            </div>           
        </div>
    </div>
</form>
@endsection
