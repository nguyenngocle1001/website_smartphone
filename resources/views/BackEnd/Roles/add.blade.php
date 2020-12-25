@extends('masterbe')
@section('title')
    Thêm mới quyền
@endsection
@section('content')
<form method="post" action="{{ route('adminroles.store') }}">
    @csrf
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="form-group">
                <label>Tên quyền</label>
                <input type="text" name="name" class="form-control" placeholder="name" />
                @error('name')
                <span class="error">* Bạn chưa nhập tên quyền</span>
                @enderror  
            </div>
            <div class="form-group">
                <label>Mô tả</label>
                <input type="text" name="description" class="form-control" placeholder="description" />
                @error('description')
                <span class="error">* Bạn chưa nhập mô tả</span>
                @enderror  
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Lưu lại</button>
                <a class="btn btn-secondary" href="role-list.html">Quay lại</a>
            </div> 
            @if(session('notice'))
                {!! session('notice') !!}
            @endif
                     
        </div>
    </div>
</form>
@endsection
