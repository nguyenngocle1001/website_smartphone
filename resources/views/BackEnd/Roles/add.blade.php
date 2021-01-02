@extends('masterbe')
@section('title')
    Thêm mới quyền
@endsection
@section('content')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <form id="form" method="post" action="{{ route('adminroles.store') }}">
        @csrf
        <div class="row">
            <div class="col-md-6 m-auto">
                <div class="form-group">
                    <label>Tên quyền</label>
                    <input type="text" name="name" class="form-control" placeholder="name" />
                    {{-- @error('name')
                    <span class="error">* Bạn chưa nhập tên quyền</span>
                    @enderror --}}
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <input type="text" name="description" class="form-control" placeholder="description" />
                    {{-- @error('description')
                    <span class="error">* Bạn chưa nhập mô tả</span>
                    @enderror --}}
                </div>
                <div class="form-group">
                    <button id="submit" type="submit" class="btn btn-success">Lưu lại</button>
                    <a class="btn btn-secondary" href="{{ route('adminroles.index') }}">Quay lại</a>
                </div>
                <div class="form-group" id="review"></div>
                <div class="form-group" id="validation-errors"></div>
                {{-- @if (session('notice'))
                    {!! session('notice') !!}
                @endif --}}
            </div>
        </div>

    </form>
    <script>
        $('#form').submit(function(e) {
            e.preventDefault();

            $.ajax({
                type: 'POST',
                cache: false,
                url: "{{ route('adminroles.store') }}",
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
