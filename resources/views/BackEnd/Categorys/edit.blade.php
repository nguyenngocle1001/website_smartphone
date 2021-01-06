@extends('masterbe')
@section('title')
    Chỉnh sửa loại hàng 
@endsection
@section('content')
    <form class="form" method="POST" action="{{ route('admincategorys.update', $cate->Cate_Id) }}">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="row">
            <div class="col-md-6 m-auto">
                <div class="form-group">
                    <label>Tên loại hàng</label>
                    <label class="lblNameCate"></label>
                    <input type="text" value="{{ $cate->Cate_name }}" name="cate_name" class="form-control" placeholder="name" />
                </div>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Lưu lại</button>
                    <a class="btn btn-secondary" href="{{ route('admincategorys.index') }}">Quay lại</a>
                </div>
                <div class="form-group result"></div>
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
                    url: "{{ route('admincategorys.update', $cate->Cate_Id) }}",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        $('.result').html(data);
                        window.location = "{{ route('admincategorys.index') }}";
                    },
                    error: function(data) {
                        $('.result').html('');

                        console.log(data);

                        notice('lblNameCate', data.responseJSON.errors['name']);

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
