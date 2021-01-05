@extends('masterbe')
@section('title')
    Thêm mới người dùng
@endsection
@section('content')
    <form class="form" method="post" action="{{ route('adminusers.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tài khoản</label>
                    <label class="lblUsername"></label>
                    <input type="text" name="username" class="form-control" placeholder="Tên tài khoản" />
                </div>
                <div class="form-group">
                    <label>Mật khẩu</label>
                    <label class="lblPassword"></label>
                    <input type="password" name="password" class="form-control" placeholder="Mật khẩu" />
                </div>
                <div class="form-group">
                    <label>Họ tên</label>
                    <label class="lblFullname"></label>
                    <input type="text" name="fullname" class="form-control" placeholder="fullname" />
                </div>
                <div class="form-group">
                    <label>Phân quyền</label>
                    <select name="role" class="form-control">
                        @foreach ($roles as $role)
                            <option value="{{ $role->Role_Id }}">{{ $role->Role_Name }}</option>
                        @endforeach
                    </select>
                </div>

            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Số điện thoại</label>
                    <label class="lblTel"></label>
                    <input type="text" name="tel" class="form-control" placeholder="Số điện thoại" />
                </div>
                <div class="form-group">
                    <label>Địa chỉ</label>
                    <label class="lblAddress"></label>
                    <input type=" text" name="address" class="form-control" placeholder="Địa chỉ" />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <label class="lblEmail"></label>
                    <input type="email" name="email" class="form-control" placeholder="email" />
                </div>
                <div id="file" class="form-group">
                    <label>Avatar</label>
                    <label class="lblAvatar"></label>
                    <input type="file" accept="image/x-png,image/jpeg,image/jpg" name="avatar" class="form-control" />
                </div>
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-success">Lưu lại</button>
                <a class="btn btn-secondary" href="user-list.html">Quay lại</a>
            </div>
            <div class="col-12 mt-3">
                <div class="result">

                </div>
            </div>
        </div>
    </form>
    <script>
        $(document).ready(function() {
            $('.form').submit(function(e) {
                e.preventDefault();

                $.ajaxSetup({
                    header: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                var formData = new FormData(this);

                $.ajax({
                    type: 'POST',
                    cache: false,
                    url: "{{ route('adminusers.store') }}",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        $('.result').html(data);
                    },
                    error: function(data) {
                        $('.result').html('');

                        console.log(data);

                        notice('lblUsername', data.responseJSON.errors['username']);
                        notice('lblPassword', data.responseJSON.errors['password']);
                        notice('lblFullname', data.responseJSON.errors['fullname']);
                        notice('lblTel', data.responseJSON.errors['tel']);
                        notice('lblAddress', data.responseJSON.errors['address']);
                        notice('lblEmail', data.responseJSON.errors['email']);
                        notice('lblAvatar', data.responseJSON.errors['avatar']);
                    }
                });
            });
        });

        function notice(lbl, value) {
            if (value) {
                $('.' + lbl).html('<span class="error">' + value + '</span>');
            } else {
                $('.' + lbl).html('<span class="success">Hợp lệ</span>');
            }
        }

    </script>
@endsection
