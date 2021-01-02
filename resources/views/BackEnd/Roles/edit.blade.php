@extends('masterbe')
@section('title')
    Chỉnh sửa quyền
@endsection
@section('content')
    <form id="form" method="POST" action="{{ route('adminroles.update', $role->RoleId) }}">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="row">
            <div class="col-md-6 m-auto">
                <div class="form-group">
                    <label>Tên quyền</label>
                    <input type="text" value="{{ $role->RoleName }}" name="name" class="form-control" placeholder="name" />
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <input type="text" value="{{ $role->Description }}" name="description" class="form-control"
                        placeholder="description" />
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Lưu lại</button>
                    <a class="btn btn-secondary" href="{{ route('adminroles.index') }}">Quay lại</a>
                </div>
                <div class="form-group" id="review"></div>
                <div class="form-group" id="validation-errors"></div>
            </div>
        </div>
    </form>
    <script>
        $('#form').submit(function(e) {
            e.preventDefault();

            $.ajax({
                type: 'PUT',
                cache: false,
                url: "{{ route('adminroles.update', $role->RoleId) }}",
                data: {
                    "_token": '{{ csrf_token() }}',
                    "name": $('input[name=name]').val(),
                    "description": $('input[name=description]').val(),
                },
                success: function(data) {
                    $('#review').html(data);
                    $('#validation-errors').html('');
                    console.log("submission was successful");
                },
                error: function(xhr) {
                    $('#validation-errors').html('');
                    $.each(xhr.responseJSON.errors, function(key, value) {
                        $('#validation-errors').append('<div class="alert alert-danger">' +
                            value + '</div>');
                    });
                }
            }, 'json');
        });

    </script>
@endsection
