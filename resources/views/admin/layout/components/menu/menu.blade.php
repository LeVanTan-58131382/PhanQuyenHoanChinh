

@section('left-menu-master')
<div class="left-menu-master">
    <div class="btn-left-menu">
        <span class="fas fa-bars"></span>
    </div>
    <nav class="sidebar">
        <div class="text">
            Quản Lý</div>
        <ul>
            <li class="active"><a href="#">Chức năng</a></li>
            <li>
                <a href="#" class="feat-btn">Chức năng
                    <span class="fas fa-caret-down first"></span>
                </a>
                <ul class="feat-show">
                    <li><a href="#">Hành động</a></li>
                    <li><a href="#">Hành động</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="serv-btn">Chức năng
                    <span class="fas fa-caret-down second"></span>
                </a>
                <ul class="serv-show">
                    <li><a href="#">Hành động</a></li>
                    <li><a href="#">Hành động</a></li>
                </ul>
            </li>

            {{-- @yield("left-menu-master-item") --}}
            @include('admin.manage.products.menu')
            @include('admin.manage.users.menu')
        </ul>
    </nav>
</div>
@endsection



