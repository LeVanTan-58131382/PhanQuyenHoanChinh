@extends('admin.home')

@section('content-detail')

<style type="text/css">
    .dropdown-toggle{
        height: 40px;
        width: 400px !important;
    }
</style>

<div class="container">
    <form method="post" action="{{ route('user.store') }}">
        @csrf
    <div class="form-group">
            <label>Tên</label>
            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Nhập tên">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Email</label>
            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Nhập email">
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Password</label>
            <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Nhập mật khẩu">
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label><strong>Chọn vai trò :</strong></label><br/>
            <select class="selectpicker" multiple data-live-search="true" name="roles[]">
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('select').selectpicker();
    });
</script>

@endsection
