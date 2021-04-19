
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


        }, false)



        $('.btn-left-menu').click(function () {
            $(this).toggleClass("click");
            $('.sidebar').toggleClass("show");
        });
        $('.feat-btn').click(function () {
            $('nav ul .feat-show').toggleClass("show");
            $('nav ul .first').toggleClass("rotate");
        });
        $('.serv-btn').click(function () {
            $('nav ul .serv-show').toggleClass("show1");
            $('nav ul .second').toggleClass("rotate");
        });
        $('nav ul li').click(function () {
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
