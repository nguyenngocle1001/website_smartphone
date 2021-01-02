@extends('masterbe')
@section('title')
    Danh sách quyền
@endsection
@section('content')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
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
            {{-- @for ($i = 0; $i < count($roles); $i++)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $roles[$i]->RoleName }}</td>
                    <td>{{ $roles[$i]->Description }}</td>
                    <td class="detroy">
                        <a href="{{ route('adminroles.edit', $roles[$i]->RoleId) }}" class="btn btn-sm btn-info">
                            <i class="fa fa-pencil-square-o"></i>
                        </a>

                        <form class="detroy__form" action="{{ route('adminroles.destroy', $roles[$i]->RoleId) }}"
                            method="post">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-sm btn-danger detroy__form__btn"><i class="fa fa-trash-o"></i></button>
                        </form>
                    </td>
                </tr>
            @endfor --}}
        </tbody>
    </table>
    <script>
        function loadRoles() {
            $.ajax({
                url: "{{ route('loadroles') }}",
                type: 'GET',
                success: function(data) {
                    $('#data').html(data);
                }
            })
        }
        loadRoles();

        console.log($(".deleteRole"));

        $(".deleteRole").click(function() {
            var id = $(this).data("id");
            var token = $(this).data("token");
            console.log(token);
            // $.ajax({
            //     url: "user/delete/" + id,
            //     type: 'PUT',
            //     dataType: "JSON",
            //     data: {
            //         "id": id,
            //         "_method": 'DELETE',
            //         "_token": token,
            //     },
            //     success: function() {
            //         console.log("it Work");
            //     }
            // });

            // console.log("It failed");
        });

    </script>
    {{-- <script src="{{ asset('BackEnd/js/jquery.slim.min.js') }}"></script>
    --}}
    @if (session('notice'))
        <script>
            alert("{{ session('notice') }}");

        </script>
    @endif
@endsection
