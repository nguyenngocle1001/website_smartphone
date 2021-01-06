@extends('masterbe')
@section('linkheader')
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script>
@endsection
@section('title')
    Thêm mới người dùng
@endsection
@section('content')
    <form class="form" method="post" action="{{ route('adminproducts.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Tên sản phẩm</label>
                    <label class="lblProdName"></label>
                    <input type="text" name="prodname" class="form-control" placeholder="Tên sản phẩm" />
                </div>
                <div class="form-group">
                    <label>Giá bán</label>
                    <label class="lblPrice"></label>
                    <input type="text" name="price" class="form-control" placeholder="Giá bán" />
                </div>
                <div class="form-group">
                    <label>Mô tả</label>
                    <label class="lblDecription"></label>
                    <textarea name="decription" class="form-control"></textarea>
                    
                </div>
                <div class="form-group">
                    <label>Phân loại</label>
                    <select name="category" class="form-control">
                        @foreach ($categorys as $category)
                            <option value="{{ $category->Cate_Id }}">{{ $category->Cate_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>Nhà cung cấp</label>
                    <select name="manufacturers" class="form-control">
                        @foreach ($manufacturers as $manufacturer)
                            <option value="{{ $manufacturer->Manu_Id }}">{{ $manufacturer->Name }}</option>
                        @endforeach
                    </select>
                </div>

            </div>
            <div class="col-md-6">
                <div id="file" class="form-group">
                    <label>Hình mô tả 1</label>
                    <label class="lblImage1"></label>
                    <input type="file" accept="image/x-png,image/jpeg,image/jpg" name="image1" class="form-control" />
                </div>
                <div id="file" class="form-group">
                    <label>Hình mô tả 2</label>
                    <label class="lblImage2"></label>
                    <input type="file" accept="image/x-png,image/jpeg,image/jpg" name="image2" class="form-control" />
                </div>
                <div id="file" class="form-group">
                    <label>Hình mô tả 3</label>
                    <label class="lblImage3"></label>
                    <input type="file" accept="image/x-png,image/jpeg,image/jpg" name="image3" class="form-control" />
                </div>
            </div>
            <div class="col-12 mt-3">
                <button type="submit" class="btn btn-success">Lưu lại</button>
                <a class="btn btn-secondary" href="{{ route('adminusers.index') }}">Quay lại</a>
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
                    url: "{{ route('adminproducts.store') }}",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(data) {
                        $('.result').html(data);
                        document.querySelector('.form').reset();
                    },
                    error: function(data) {
                        $('.result').html('');

                        console.log(data);

                        notice('lblProdName', data.responseJSON.errors['prodname']);
                        notice('lblPrice', data.responseJSON.errors['price']);
                        notice('lblDecription', data.responseJSON.errors['decription']);
                        notice('lblImage1', data.responseJSON.errors['image1']);
                        notice('lblImage2', data.responseJSON.errors['image2']);
                        notice('lblImage3', data.responseJSON.errors['image3']);
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
