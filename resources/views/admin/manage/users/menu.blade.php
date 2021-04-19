{{-- @extends('admin.layout.components.menu.menu') --}}

{{-- @section('left-menu-master-item') --}}
    {{-- @can("user-manage") --}}
        <li>
            <a href="#" class="user-btn">Người dùng và Quyền
                <span class="fas fa-caret-down user-rotate-icon"></span>
            </a>
            <ul class="user-show">
                <li><a href="#">Quyền</a></li>

                @can("role-manage")
                    <li><a href="#">Vai trò</a></li>
                @endcan
                
                @can("user-manage")
                <li><a href="#">Người dùng</a></li>
                @endcan
            </ul>
        </li>
    {{-- @endcan --}}

{{-- @endsection --}}

<style>
    .left-menu-master nav ul .user-show.user-show-active {
    display: block;
    height: auto;
}
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {

        
        $('.left-menu-master .user-btn').click(function() {
            $('.left-menu-master nav ul .user-show').toggleClass("user-show-active");
            $('.left-menu-master nav ul .user-rotate-icon').toggleClass("rotate");
        });
    
        $('.left-menu-master nav ul li').click(function() {
            $(this).addClass("active").siblings().removeClass("active");
        });

    }, false)

</script>
