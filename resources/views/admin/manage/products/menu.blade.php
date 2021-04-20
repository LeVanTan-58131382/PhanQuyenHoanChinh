{{-- @extends('admin.layout.components.menu.menu') --}}

{{-- @section('left-menu-master-item') --}}

    <li>
        <a href="#" class="product-btn">Product
            <span class="fas fa-caret-down product-rotate-icon"></span>
        </a>
        @can(config("permission.access.PRODUCT-MANAGE"))
            <ul class="product-show">
                @can(config("permission.access.PRODUCT-LIST"))
                    <li><a href="#">List</a></li>
                @endcan   
                @can(config("permission.access.PRODUCT-CREATE"))
                <li><a href="#">Add</a></li>
                @endcan
            </ul>
        @endcan
    </li>

{{-- @endsection --}}

<style>
    .left-menu-master nav ul .product-show.product-show-active {
    display: block;
    height: auto;
}
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {

        
        $('.left-menu-master .product-btn').click(function() {
            $('.left-menu-master nav ul .product-show').toggleClass("product-show-active");
            $('.left-menu-master nav ul .product-rotate-icon').toggleClass("rotate");
        });
    
        $('.left-menu-master nav ul li').click(function() {
            $(this).addClass("active").siblings().removeClass("active");
        });

    }, false)

</script>
