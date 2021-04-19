@extends('layouts.master')

<style>
    .master-body-content{
        position: relative;
        left: 0%;
        top: 0%;
    }

    .body-content{
        position: relative;
        width: 100%;
        height: auto;
        left: 0%;
        top: 0%;
        padding: 20px;
        padding-top: 10px;
        
        padding-left: 60px;
    }
</style>

@section('content')
<div class="col">
    <div class="row">
        <div class="col-md-12">
            <div class=" master-body-content">
                <div class="body-content">
                    @yield('content-detail')
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection
