@extends('admin.home')

@section('content-detail')

<style type="text/css">
    .dropdown-toggle{
        height: 40px;
        width: 400px !important;
    }
</style>

<div class="container">
    <form method="post" action="{{ route('role.update', $role->id) }}">
        @csrf
    <div class="form-group">
            <label>Tên</label>
            <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $role->name }}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label><strong>Chọn quyền :</strong></label><br/>
            <select class="selectpicker" multiple data-live-search="true" name="permissions[]">
                @foreach ($permissions as $permission)
                    <option value="{{ $permission->id }}"
                    <?php
                    foreach($role->permissions as $permission_role) 
                            if($permission_role->pivot->permission_id == $permission->id && $permission_role->pivot->role_id == $role->id){
                                echo "selected";
                            }
                    ?>
                    >{{ $permission->name }}</option>
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
