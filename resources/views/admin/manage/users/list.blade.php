@extends('admin.home')

@section('content-detail')

<style>
    

    @media screen and (max-width: 970px) {
        .table-users{
            overflow-x: scroll;
        }
    }
</style>

<div class="container">
<div class="table-users">
    <div class="col">
        <div class="row-md-12 row-sm-12 row-lg-12">
        @can(config("permission.access.USER-CREATE"))
        <a href="{{ route('user.create') }}"><button>Thêm</button></a> 
        @endcan
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">Tên</th>
                    <th scope="col">Email</th>
                    <th scope="col">Handle</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            @can(config("permission.access.USER-SHOW"))
                                <a href="{{ route('user.show', $user->id) }}"><button>Chi tiết</button></a>
                            @endcan
                            <b>|</b>
                            @can(config("permission.access.USER-UPDATE"))
                            <a href="{{ route('user.edit', $user->id) }}"><button>Cập nhật</button></a>
                            @endcan
                            <b>|</b>
                            @can(config("permission.access.USER-DESTROY"))
                            <button>Xóa</button>
                            @endcan
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="row-md-12">
            {{ $users->links() }}
        </div>
    </div>
    </div>
</div>

@endsection