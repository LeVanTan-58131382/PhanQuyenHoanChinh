@extends('admin.home')

@section('content-detail')

<style type="text/css">
    .dropdown-toggle{
        height: 40px;
        width: 400px !important;
    }
</style>

<div class="container">
    <form method="post" action="{{ route('user.update', $user->id) }}">
        @csrf
    <div class="form-group">
            <label>Tên</label>
            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $user->name }}"/>
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Email</label>
            <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" value="{{ $user->email }}">
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label>Password</label>
            <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" value="{{ $user->password }}">
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label><strong>Chọn vai trò :</strong></label><br/>
            <select class="selectpicker" multiple data-live-search="true" name="roles[]">
                @foreach ($roles as $role)
                    <option value="{{ $role->id }}"
                    <?php
                    foreach($user->roles as $role_user) 
                            if($role_user->pivot->role_id == $role->id && $role_user->pivot->user_id == $user->id){
                                echo "selected";
                            }
                    ?>
                    > {{ $role->name }} </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Sửa</button>
    </form>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('select').selectpicker();
    });
</script>

@endsection
