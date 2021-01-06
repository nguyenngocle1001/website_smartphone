@extends('masterbe')
@section('title')
    Thêm mới thương hiệu
@endsection
@section('content')
    <form class="form" method="post" action="{{ route('adminmanufacturers.store') }}">
        @csrf
        <div class="row">
            <div class="col-md-6 m-auto">
                <div class="form-group">
                    <label>Tên loại hàng</label>
                    <label class="lblNameManu"></label>
                    <input type="text" name="manu_name" class="form-control" placeholder="name" />
                </div>                
                <div class="form-group">
                    <button id="submit" type="submit" class="btn btn-success">Lưu lại</button>
                    <a class="btn btn-secondary" href="{{ route('adminmanufacturers.index') }}">Quay lại</a>
                </div>
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
                    url: "{{ route('adminmanufacturers.store') }}",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        $('.result').html(data);
                        document.querySelector('.form').reset();
                        $('.lblNameManu').html('');
                        
                    },
                    error: function(data) {
                        $('.result').html('');

                        console.log(data);

                        notice('lblNameManu', data.responseJSON.errors['manu_name']);
                        
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