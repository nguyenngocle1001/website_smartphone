@extends('masterbe')
@section('title')
    Thêm mới quyền
@endsection
@section('content')
<form method="post" action="">
    @csrf
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="form-group">
                <label>Tên quyền</label>
                <input type="text" name="name" class="form-control" placeholder="name" />
                <span class="error">@error('name')
                    
                @enderror</span>
            </div>
            <div class="form-group">
                <label>Mô tả</label>
                <input type="text" name="description" class="form-control" placeholder="description" />
                <span class="error">@error('description')
                    * Vui lòng nhập
                    @enderror</span>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Lưu lại</button>
                <a class="btn btn-secondary" href="role-list.html">Quay lại</a>
            </div>
        </div>
    </div>
</form>
@endsection
