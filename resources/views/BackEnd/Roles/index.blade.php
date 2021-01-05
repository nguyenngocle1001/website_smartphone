@extends('masterbe')
@section('title')
    Danh sách quyền
@endsection
@section('content')
    <div class="row">
        <div class="col-md-8">
            <a href="{{ route('adminroles.create') }}" class="btn btn-primary">Thêm mới</a>
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
                <th>Tên Quyền</th>
                <th>Mô Tả</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody id="data">
            @for ($i = 0; $i < count($roles); $i++)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $roles[$i]->Role_Name }}</td>
                    <td>{{ $roles[$i]->Descripton }}</td>
                    <td class="detroy">
                        <a href="{{ route('adminroles.edit', $roles[$i]->Role_Id) }}" class="btn btn-sm btn-info">
                            <i class="fa fa-pencil-square-o"></i>
                        </a>

                        <form class="detroy__form" action="{{ route('adminroles.destroy', $roles[$i]->Role_Id) }}"
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
    {{-- <script src="{{ asset('BackEnd/js/jquery.slim.min.js') }}"></script>
    --}}
    @if (session('notice'))
        <script>
            alert("{{ session('notice') }}");

        </script>
    @endif
@endsection
