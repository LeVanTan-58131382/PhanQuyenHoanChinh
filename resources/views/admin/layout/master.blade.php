<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Layout</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.4.1.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <link rel="stylesheet" href="{{ asset("admin/css/styles.css") }}" />

</head>

<body>

    <div class="master-all">

        <div class="btn-noidung nut">
            <span class="fas fa-sign-out-alt"></span>
        </div>

        <div class="top-nav-master">
            <nav>
                <div class="wrapper">
                    <div class="logo"><a href="#">CodingNepal</a></div>
                    <input type="radio" name="slider" id="menu-btn">
                    <input type="radio" name="slider" id="close-btn">
                    <ul class="nav-links">
                        <label for="close-btn" class="btn close-btn"><i class="fas fa-times"></i></label>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li>
                            <a href="#" class="desktop-item">Dropdown Menu</a>
                            <input type="checkbox" id="showDrop">
                            <label for="showDrop" class="mobile-item">Dropdown Menu</label>
                            <ul class="drop-menu">
                                <li><a href="#">Drop menu 1</a></li>
                                <li><a href="#">Drop menu 2</a></li>
                                <li><a href="#">Drop menu 3</a></li>
                                <li><a href="#">Drop menu 4</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="desktop-item">Mega Menu</a>
                            <input type="checkbox" id="showMega">
                            <label for="showMega" class="mobile-item">Mega Menu</label>
                            <div class="mega-box">
                                <div class="content">
                                    <div class="row">
                                        <!-- <img src="img.jpg" alt=""> -->
                                    </div>
                                    <div class="row">
                                        <header>Design Services</header>
                                        <ul class="mega-links">
                                            <li><a href="#">Graphics</a></li>
                                            <li><a href="#">Vectors</a></li>
                                            <li><a href="#">Business cards</a></li>
                                            <li><a href="#">Custom logo</a></li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <header>Email Services</header>
                                        <ul class="mega-links">
                                            <li><a href="#">Personal Email</a></li>
                                            <li><a href="#">Business Email</a></li>
                                            <li><a href="#">Mobile Email</a></li>
                                            <li><a href="#">Web Marketing</a></li>
                                        </ul>
                                    </div>
                                    <div class="row">
                                        <header>Security services</header>
                                        <ul class="mega-links">
                                            <li><a href="#">Site Seal</a></li>
                                            <li><a href="#">VPS Hosting</a></li>
                                            <li><a href="#">Privacy Seal</a></li>
                                            <li><a href="#">Website design</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="#">Feedback</a></li>
                    </ul>
                    <label for="menu-btn" class="btn menu-btn"><i class="fas fa-bars"></i></label>
                </div>
            </nav>

            
                <div class="sub-title">using only HTML & CSS</div>

            
        </div>

        @yield('content')
        
        @yield('left-menu-master')

        <div class="veBenTrai left-left-menu-master">
            <nav>
                <div class="drop-btn">
                    Drop down <span class="fas fa-caret-down"></span>
                </div>
                <div class="tooltip">
                </div>
                <div class="wrapper">
                    <ul class="menu-bar">
                        <li><a href="#">
                                <div class="icon">
                                    <span class="fas fa-home"></span>
                                </div>
                                Home
                            </a></li>
                        <li class="setting-item"><a href="#">
                                <div class="icon">
                                    <span class="fas fa-cog"></span>
                                </div>
                                Settings & privacy <i class="fas fa-angle-right"></i>
                            </a></li>
                        <li class="help-item"><a href="#">
                                <div class="icon">
                                    <span class="fas fa-question-circle"></span>
                                </div>
                                Help & support <i class="fas fa-angle-right"></i>
                            </a></li>
                        <li><a href="#">
                                <div class="icon">
                                    <span class="fas fa-user"></span>
                                </div>
                                About us
                            </a></li>
                        <li><a href="#">
                                <div class="icon">
                                    <span class="fas fa-comment-alt"></span>
                                </div>
                                Feedback
                            </a></li>
                    </ul>
                    <!-- Settings & privacy Menu-items -->
                    <ul class="setting-drop">
                        <li class="arrow back-setting-btn"><span class="fas fa-arrow-left"></span>Settings & privacy
                        </li>
                        <li><a href="#">
                                <div class="icon">
                                    <span class="fas fa-user"></span>
                                </div>
                                Personal info
                            </a></li>
                        <li><a href="#">
                                <div class="icon">
                                    <span class="fas fa-lock"></span>
                                </div>
                                Password
                            </a></li>
                        <li><a href="#">
                                <div class="icon">
                                    <span class="fas fa-address-book"></span>
                                </div>
                                Activity log
                            </a></li>
                        <li><a href="#">
                                <div class="icon">
                                    <span class="fas fa-globe-asia"></span>
                                </div>
                                Languages
                            </a></li>
                        <li><a href="#">
                                <div class="icon">
                                    <span class="fas fa-sign-out-alt"></span>
                                </div>
                                Log out
                            </a></li>
                    </ul>
                    <!-- Help & support Menu-items -->
                    <ul class="help-drop">
                        <li class="arrow back-help-btn"><span class="fas fa-arrow-left"></span>Help & support</li>
                        <li><a href="#">
                                <div class="icon">
                                    <span class="fas fa-question-circle"></span>
                                </div>
                                Help centre
                            </a></li>
                        <li><a href="#">
                                <div class="icon">
                                    <span class="fas fa-envelope"></span>
                                </div>
                                Support Inbox
                            </a></li>
                        <li><a href="#">
                                <div class="icon">
                                    <span class="fas fa-comment-alt"></span>
                                </div>
                                Send feedback
                            </a></li>
                        <li><a href="#">
                                <div class="icon">
                                    <span class="fas fa-exclamation-circle"></span>
                                </div>
                                Report problem
                            </a></li>
                    </ul>
                </div>
            </nav>

        </div>
        <div class="khoiDen">

        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var nutBam = document.querySelector(".nut");
            var menuTrai = document.querySelector(".menuTrai");
            var khoiDen = document.querySelector(".khoiDen");
            var khoiND = document.querySelector(".master-all");

            // click nút xanh
            nutBam.onclick = function () {
                khoiDen.classList.add("hienLen");
                khoiND.classList.add("dichQuaPhai");

            }

            khoiDen.onclick = function () {
                khoiDen.classList.remove("hienLen");
                khoiND.classList.remove("dichQuaPhai");
            }

            $('.left-menu-master .btn-left-menu').click(function () {
            $(this).toggleClass("click");
            $('.left-menu-master .sidebar').toggleClass("show");
            });
            $('.left-menu-master .feat-btn').click(function () {
                $('.left-menu-master nav ul .feat-show').toggleClass("show");
                $('.left-menu-master nav ul .first').toggleClass("rotate");
            });
            $('.left-menu-master .serv-btn').click(function () {
                $('.left-menu-master nav ul .serv-show').toggleClass("show1");
                $('.left-menu-master nav ul .second').toggleClass("rotate");
            });
            $('.left-menu-master nav ul li').click(function () {
                $(this).addClass("active").siblings().removeClass("active");
            });


        const drop_btn = document.querySelector(".left-left-menu-master .drop-btn span");
        const tooltip = document.querySelector(".left-left-menu-master .tooltip");
        const menu_wrapper = document.querySelector(".left-left-menu-master .wrapper");
        const menu_bar = document.querySelector(".left-left-menu-master .menu-bar");
        const setting_drop = document.querySelector(".left-left-menu-master .setting-drop");
        const help_drop = document.querySelector(".left-left-menu-master .help-drop");
        const setting_item = document.querySelector(".left-left-menu-master .setting-item");
        const help_item = document.querySelector(".left-left-menu-master .help-item");
        const setting_btn = document.querySelector(".left-left-menu-master .back-setting-btn");
        const help_btn = document.querySelector(".left-left-menu-master .back-help-btn");
        drop_btn.onclick = (() => {
            menu_wrapper.classList.toggle("show");
            tooltip.classList.toggle("show");
        });
        setting_item.onclick = (() => {
            menu_bar.style.marginLeft = "-300px";
            setTimeout(() => {
                setting_drop.style.display = "block";
            }, 100);
        });
        help_item.onclick = (() => {
            menu_bar.style.marginLeft = "-300px";
            setTimeout(() => {
                help_drop.style.display = "block";
            }, 100);
        });
        setting_btn.onclick = (() => {
            menu_bar.style.marginLeft = "0px";
            setting_drop.style.display = "none";
        });
        help_btn.onclick = (() => {
            help_drop.style.display = "none";
            menu_bar.style.marginLeft = "0px";
        });

        }, false)
    </script>

</body>

</html>