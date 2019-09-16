<?php
$str = url()->current();
$main_class = $str = url()->current() != $_ENV['APP_URL'] ? 'main_menu' : 'main_menu home_menu';
$booking_button_class = $str = url()->current() != $_ENV['APP_URL'] ? 'single_page_btn d-none d-sm-block' : 'btn_1 d-none d-sm-block';
?>
<header class="{{$main_class}}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="/"> <img src="img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="/">Главное</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('about')}}">О Нас</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('menu')}}">Меню</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('contact')}}">Как нас найти?</a>
                                </li>
                            </ul>
                        </div>
                        <div class="menu_btn">
                            <a href="#" class="{{$booking_button_class}}">Зарезервировать столик</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>