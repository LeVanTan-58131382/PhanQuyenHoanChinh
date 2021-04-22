@extends('admin.home')

@section('content-detail')

<div class="container">
        <div class="form-group">
            <p><strong>Tên :</strong>{{ $user->name }}</p> 
        </div>
        <div class="form-group">
            <p><strong>Email :</strong>{{ $user->email }}</p>
        </div>
        <div class="form-group">
            <p><strong>Vai trò :</strong></p>      
                @foreach($user->roles as $role_user) 
                    <p>{{ $role_user->name }}</p>
                @endforeach
        </div>
</div>

@endsection
