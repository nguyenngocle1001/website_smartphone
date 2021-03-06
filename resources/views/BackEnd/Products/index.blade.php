@extends('masterbe')
@section('title')
    Danh sách sản phẩm
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8">
            <a href="{{ route('adminproducts.create') }}" class="btn btn-primary">Thêm mới</a>
        </div>
        <div class="col-md-4">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Tìm kiếm...">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2"><i class="fa fa-search"></i></span>
                </div>
            </div>
        </div>
    </div>
    <table class="table table-bordered table-hover mt-3">
        <thead>
            <tr>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Hình mô tả</th>
                <th>Giá</th>
                <th>Mô tả</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody id="loadData">
            @for ($i = 0; $i < count($products); $i++)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $products[$i]->Prod_Name }}</td>
                    <td>
                        <div class="image"
                            
                            style="background-image: url({{ URL::asset('storage/products/' . $products[$i]->Prod_Id . '/' . $products[$i]->image1) }})">
                        </div>
                    </td>
                    <td>{{ $products[$i]->Price }}</td>
                    <td>{!! $products[$i]->Decription !!}</td>
                    <td>
                        <a href="{{ route('adminproducts.edit', $products[$i]->Prod_Id) }}" class="btn btn-sm btn-info">
                            <i class="fa fa-pencil-square-o"></i>
                        </a>
                        <form class="detroy__form" action="{{ route('adminproducts.destroy', $products[$i]->Prod_Id) }}"
                            method="post">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-sm btn-danger detroy__form__btn"><i class="fa fa-trash-o"></i></button>
                        </form>
                    </td>
                </tr>
            @endfor
        </tbody>
    </table>
    <div>
        {{ $products->links() }}
    </div>
@endsection
