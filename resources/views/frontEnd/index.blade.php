@extends('frontEnd.layouts.main')
@section('title','Главная')
@section('content')

    <div>
        <!-- banner part start-->
        <section class="banner_part">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="banner_text">
                            <div class="banner_text_iner">
                                <h5 style="font-size:2.5em;">Хочешь Короля пиццы?</h5>
                                <!-- <h5>{{$text}}</h5> -->
                                <h1>Посмотри на <i>Его Величество</i> ниже</h1>
                                <p>
                                    Только у нас в городе вы можете заказать доставку 24 часа и 7 дней в неделю. А от Коно Меню прям пальчики оближешь. 
                                    Но долго ждать не придется, всего лишь до 45 минут :-)
                                </p>
                                <div class="banner_btn">
                                    <div class="banner_btn_iner">
                                        <a href="{{url('menu')}}" class="btn_2">Гоу посмотреть на Короля <img src="img/icon/left_1.svg" alt=""></a>
                                    </div>
                                    <!-- <a href="https://www.youtube.com/watch?v=pBFQdxA-apI" class="popup-youtube video_popup">
                                        <span><img src="img/icon/play.svg" alt=""></span> Watch our story</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- banner part start-->

        <!--::exclusive_item_part start::-->
        <!-- <section class="exclusive_item_part blog_item_section">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="section_tittle">
                            <p>Popular Dishes</p>
                            <h2>Our Exclusive Items</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="single_blog_item">
                            <div class="single_blog_img">
                                <img src="img/food_item/food_item_1.png" alt="">
                            </div>
                            <div class="single_blog_text">
                                <h3>Indian Burger</h3>
                                <p>Was brean shed moveth day yielding tree yielding day were female and </p>
                                <a href="#" class="btn_3">Read More <img src="img/icon/left_2.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="single_blog_item">
                            <div class="single_blog_img">
                                <img src="img/food_item/food_item_2.png" alt="">
                            </div>
                            <div class="single_blog_text">
                                <h3>Cremy Noodles</h3>
                                <p>Was brean shed moveth day yielding tree yielding day were female and </p>
                                <a href="#" class="btn_3">Read More <img src="img/icon/left_2.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="single_blog_item">
                            <div class="single_blog_img">
                                <img src="img/food_item/food_item_3.png" alt="">
                            </div>
                            <div class="single_blog_text">
                                <h3>Honey Meat</h3>
                                <p>Was brean shed moveth day yielding tree yielding day were female and </p>
                                <a href="#" class="btn_3">Read More <img src="img/icon/left_2.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 d-none d-sm-block d-lg-none">
                        <div class="single_blog_item">
                            <div class="single_blog_img">
                                <img src="img/food_item/food_item_1.png" alt="">
                            </div>
                            <div class="single_blog_text">
                                <h3>Cremy Noodles</h3>
                                <p>Was brean shed moveth day yielding tree yielding day were female and </p>
                                <a href="#" class="btn_3">Read More <img src="img/icon/left_2.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--::exclusive_item_part end::-->

        <!-- about part start-->
        <section class="about_part">
            <div class="container-fluid client_review_part owl-carousel">
                <div class="row align-items-center">
                    <div class="col-sm-4 col-lg-5 offset-lg-1">
                        <div class="about_img">
                            <img src="img/about.png" alt="">
                        </div>
                    </div>
                    <div class="col-sm-8 col-lg-4" id="bonus">
                        <div class="about_text">
                            <h5>Тук-Тук</h5>
                            <h2>Хочешь сэкономить?</h2>
                            <h4>Satisfying people hunger for simple pleasures</h4>
                            <p>May over was. Be signs two. Spirit. Brought said dry own firmament lesser best sixth deep
                                abundantly bearing, him, gathering you
                                blessed bearing he our position best ticket in month hole deep </p>
                            <a href="#" class="btn_3">Получить <img src="img/icon/left_2.svg" alt=""></a>
                        </div>

                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-sm-4 col-lg-5 offset-lg-1">
                        <div class="about_img">
                            <img src="img/about.png" alt="">
                        </div>
                    </div>
                    <div class="col-sm-8 col-lg-4" id="bonus">
                        <div class="about_text">
                            <h5>Тук-Тук</h5>
                            <h2>Хочешь сэкономить?</h2>
                            <h4>Satisfying people hunger for simple pleasures</h4>
                            <p>May over was. Be signs two. Spirit. Brought said dry own firmament lesser best sixth deep
                                abundantly bearing, him, gathering you
                                blessed bearing he our position best ticket in month hole deep </p>
                            <a href="#" class="btn_3">Получить <img src="img/icon/left_2.svg" alt=""></a>
                        </div>

                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-sm-4 col-lg-5 offset-lg-1">
                        <div class="about_img">
                            <img src="img/about.png" alt="">
                        </div>
                    </div>
                    <div class="col-sm-8 col-lg-4" id="bonus">
                        <div class="about_text">
                            <h5>Тук-Тук</h5>
                            <h2>Хочешь сэкономить?</h2>
                            <h4>Satisfying people hunger for simple pleasures</h4>
                            <p>May over was. Be signs two. Spirit. Brought said dry own firmament lesser best sixth deep
                                abundantly bearing, him, gathering you
                                blessed bearing he our position best ticket in month hole deep </p>
                            <a href="#" class="btn_3">Получить <img src="img/icon/left_2.svg" alt=""></a>
                        </div>

                    </div>
                </div>
            </div>
            <script>
                $(document).ready(function() {
                    $("#bonus").owlCarousel();
                });
            </script>
        </section>
        <!-- about part end-->

        <!-- food_menu start-->
        <section class="food_menu gray_bg">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5">
                        <div class="section_tittle">
                            <p>Наш популярный меню</p>
                            <h2>Разные вкусности</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="nav nav-tabs food_menu_nav" id="myTab" role="tablist">
                            <a class="active" id="Special-tab" data-toggle="tab" href="#Special" role="tab"
                                aria-controls="Special" aria-selected="false">Пицца <img src="img/icon/play.svg"
                                    alt="play"></a>
                            <a id="Breakfast-tab" data-toggle="tab" href="#Breakfast" role="tab" aria-controls="Breakfast"
                                aria-selected="false">Коно Пицца <img src="img/icon/play.svg" alt="play"></a>
                            <a id="Launch-tab" data-toggle="tab" href="#Launch" role="tab" aria-controls="Launch"
                                aria-selected="false">Суши <img src="img/icon/play.svg" alt="play"></a>
                            <a id="Dinner-tab" data-toggle="tab" href="#Dinner" role="tab" aria-controls="Dinner"
                                aria-selected="false">Сеты <img src="img/icon/play.svg" alt="play"> </a>
                            <a id="Sneaks-tab" data-toggle="tab" href="#Sneaks" role="tab" aria-controls="Sneaks"
                                aria-selected="false">Напитки <img src="img/icon/play.svg" alt="play"></a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active single-member" id="Special" role="tabpanel"
                                aria-labelledby="Special-tab">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="single_food_item media">
                                            <img src="img/food_menu/single_food_1.png" class="mr-3" alt="...">
                                            <div class="media-body align-self-center">
                                                <h3>Pork Sandwich</h3>
                                                <p>They're wherein heaven seed hath nothing</p>
                                                <h5 style="display: inline-block;">$40.00</h5>
                                                <a href="#" class="single_page_btn  d-sm-inline-block" style="margin:15px;">
                                                    Заказать по Whatsapp
                                                </a>
                                            </div>
                                        </div>
                                        <div class="single_food_item media">
                                            <img src="img/food_menu/single_food_2.png" class="mr-3" alt="...">
                                            <div class="media-body align-self-center">
                                                <h3>Roasted Marrow</h3>
                                                <p>They're wherein heaven seed hath nothing</p>
                                                <h5>$40.00</h5>
                                            </div>
                                        </div>
                                        <div class="single_food_item media">
                                            <img src="img/food_menu/single_food_3.png" class="mr-3" alt="...">
                                            <div class="media-body align-self-center">
                                                <h3>Summer Cooking</h3>
                                                <p>They're wherein heaven seed hath nothing</p>
                                                <h5>$40.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="single_food_item media">
                                            <img src="img/food_menu/single_food_4.png" class="mr-3" alt="...">
                                            <div class="media-body align-self-center">
                                                <h3>Easter Delight</h3>
                                                <p>They're wherein heaven seed hath nothing</p>
                                                <h5>$40.00</h5>
                                            </div>
                                        </div>
                                        <div class="single_food_item media">
                                            <img src="img/food_menu/single_food_5.png" class="mr-3" alt="...">
                                            <div class="media-body align-self-center">
                                                <h3>Tiener Schnitze</h3>
                                                <p>They're wherein heaven seed hath nothing</p>
                                                <h5>$40.00</h5>
                                            </div>
                                        </div>
                                        <div class="single_food_item media">
                                            <img src="img/food_menu/single_food_6.png" class="mr-3" alt="...">
                                            <div class="media-body align-self-center">
                                                <h3>Chicken Roast</h3>
                                                <p>They're wherein heaven seed hath nothing</p>
                                                <h5>$40.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade single-member" id="Breakfast" role="tabpanel"
                                aria-labelledby="Breakfast-tab">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="single_food_item media">
                                            <img src="img/food_menu/single_food_4.png" class="mr-3" alt="...">
                                            <div class="media-body align-self-center">
                                                <h3>Easter Delight</h3>
                                                <p>They're wherein heaven seed hath nothing</p>
                                                <h5>$40.00</h5>
                                            </div>
                                        </div>
                                        <div class="single_food_item media">
                                            <img src="img/food_menu/single_food_5.png" class="mr-3" alt="...">
                                            <div class="media-body align-self-center">
                                                <h3>Tiener Schnitze</h3>
                                                <p>They're wherein heaven seed hath nothing</p>
                                                <h5>$40.00</h5>
                                            </div>
                                        </div>
                                        <div class="single_food_item media">
                                            <img src="img/food_menu/single_food_6.png" class="mr-3" alt="...">
                                            <div class="media-body align-self-center">
                                                <h3>Chicken Roast</h3>
                                                <p>They're wherein heaven seed hath nothing</p>
                                                <h5>$40.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="single_food_item media">
                                            <img src="img/food_menu/single_food_1.png" class="mr-3" alt="...">
                                            <div class="media-body align-self-center">
                                                <h3>Pork Sandwich</h3>
                                                <p>They're wherein heaven seed hath nothing</p>
                                                <h5>$40.00</h5>
                                            </div>
                                        </div>
                                        <div class="single_food_item media">
                                            <img src="img/food_menu/single_food_2.png" class="mr-3" alt="...">
                                            <div class="media-body align-self-center">
                                                <h3>Roasted Marrow</h3>
                                                <p>They're wherein heaven seed hath nothing</p>
                                                <h5>$40.00</h5>
                                            </div>
                                        </div>
                                        <div class="single_food_item media">
                                            <img src="img/food_menu/single_food_3.png" class="mr-3" alt="...">
                                            <div class="media-body align-self-center">
                                                <h3>Summer Cooking</h3>
                                                <p>They're wherein heaven seed hath nothing</p>
                                                <h5>$40.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade single-member" id="Launch" role="tabpanel"
                                aria-labelledby="Launch-tab">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="single_food_item media">
                                            <img src="img/food_menu/single_food_1.png" class="mr-3" alt="...">
                                            <div class="media-body align-self-center">
                                                <h3>Pork Sandwich</h3>
                                                <p>They're wherein heaven seed hath nothing</p>
                                                <h5>$40.00</h5>
                                            </div>
                                        </div>
                                        <div class="single_food_item media">
                                            <img src="img/food_menu/single_food_2.png" class="mr-3" alt="...">
                                            <div class="media-body align-self-center">
                                                <h3>Roasted Marrow</h3>
                                                <p>They're wherein heaven seed hath nothing</p>
                                                <h5>$40.00</h5>
                                            </div>
                                        </div>
                                        <div class="single_food_item media">
                                            <img src="img/food_menu/single_food_3.png" class="mr-3" alt="...">
                                            <div class="media-body align-self-center">
                                                <h3>Summer Cooking</h3>
                                                <p>They're wherein heaven seed hath nothing</p>
                                                <h5>$40.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="single_food_item media">
                                            <img src="img/food_menu/single_food_4.png" class="mr-3" alt="...">
                                            <div class="media-body align-self-center">
                                                <h3>Easter Delight</h3>
                                                <p>They're wherein heaven seed hath nothing</p>
                                                <h5>$40.00</h5>
                                            </div>
                                        </div>
                                        <div class="single_food_item media">
                                            <img src="img/food_menu/single_food_5.png" class="mr-3" alt="...">
                                            <div class="media-body align-self-center">
                                                <h3>Tiener Schnitze</h3>
                                                <p>They're wherein heaven seed hath nothing</p>
                                                <h5>$40.00</h5>
                                            </div>
                                        </div>
                                        <div class="single_food_item media">
                                            <img src="img/food_menu/single_food_6.png" class="mr-3" alt="...">
                                            <div class="media-body align-self-center">
                                                <h3>Chicken Roast</h3>
                                                <p>They're wherein heaven seed hath nothing</p>
                                                <h5>$40.00</h5>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade single-member" id="Dinner" role="tabpanel"
                                aria-labelledby="Dinner-tab">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="single_food_item media">
                                            <img src="img/food_menu/single_food_4.png" class="mr-3" alt="...">
                                            <div class="media-body align-self-center">
                                                <h3>Easter Delight</h3>
                                                <p>They're wherein heaven seed hath nothing</p>
                                                <h5>$40.00</h5>
                                            </div>
                                        </div>
                                        <div class="single_food_item media">
                                            <img src="img/food_menu/single_food_5.png" class="mr-3" alt="...">
                                            <div class="media-body align-self-center">
                                                <h3>Tiener Schnitze</h3>
                                                <p>They're wherein heaven seed hath nothing</p>
                                                <h5>$40.00</h5>
                                            </div>
                                        </div>
                                        <div class="single_food_item media">
                                            <img src="img/food_menu/single_food_6.png" class="mr-3" alt="...">
                                            <div class="media-body align-self-center">
                                                <h3>Chicken Roast</h3>
                                                <p>They're wherein heaven seed hath nothing</p>
                                                <h5>$40.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="single_food_item media">
                                            <img src="img/food_menu/single_food_1.png" class="mr-3" alt="...">
                                            <div class="media-body align-self-center">
                                                <h3>Pork Sandwich</h3>
                                                <p>They're wherein heaven seed hath nothing</p>
                                                <h5>$40.00</h5>
                                            </div>
                                        </div>
                                        <div class="single_food_item media">
                                            <img src="img/food_menu/single_food_2.png" class="mr-3" alt="...">
                                            <div class="media-body align-self-center">
                                                <h3>Roasted Marrow</h3>
                                                <p>They're wherein heaven seed hath nothing</p>
                                                <h5>$40.00</h5>
                                            </div>
                                        </div>
                                        <div class="single_food_item media">
                                            <img src="img/food_menu/single_food_3.png" class="mr-3" alt="...">
                                            <div class="media-body align-self-center">
                                                <h3>Summer Cooking</h3>
                                                <p>They're wherein heaven seed hath nothing</p>
                                                <h5>$40.00</h5>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade single-member" id="Sneaks" role="tabpanel"
                                aria-labelledby="Sneaks-tab">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="single_food_item media">
                                            <img src="img/food_menu/single_food_1.png" class="mr-3" alt="...">
                                            <div class="media-body align-self-center">
                                                <h3>Pork Sandwich</h3>
                                                <p>They're wherein heaven seed hath nothing</p>
                                                <h5>$40.00</h5>
                                            </div>
                                        </div>
                                        <div class="single_food_item media">
                                            <img src="img/food_menu/single_food_2.png" class="mr-3" alt="...">
                                            <div class="media-body align-self-center">
                                                <h3>Roasted Marrow</h3>
                                                <p>They're wherein heaven seed hath nothing</p>
                                                <h5>$40.00</h5>
                                            </div>
                                        </div>
                                        <div class="single_food_item media">
                                            <img src="img/food_menu/single_food_3.png" class="mr-3" alt="...">
                                            <div class="media-body align-self-center">
                                                <h3>Summer Cooking</h3>
                                                <p>They're wherein heaven seed hath nothing</p>
                                                <h5>$40.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="single_food_item media">
                                            <img src="img/food_menu/single_food_4.png" class="mr-3" alt="...">
                                            <div class="media-body align-self-center">
                                                <h3>Easter Delight</h3>
                                                <p>They're wherein heaven seed hath nothing</p>
                                                <h5>$40.00</h5>
                                            </div>
                                        </div>
                                        <div class="single_food_item media">
                                            <img src="img/food_menu/single_food_5.png" class="mr-3" alt="...">
                                            <div class="media-body align-self-center">
                                                <h3>Tiener Schnitze</h3>
                                                <p>They're wherein heaven seed hath nothing</p>
                                                <h5>$40.00</h5>
                                            </div>
                                        </div>
                                        <div class="single_food_item media">
                                            <img src="img/food_menu/single_food_6.png" class="mr-3" alt="...">
                                            <div class="media-body align-self-center">
                                                <h3>Chicken Roast</h3>
                                                <p>They're wherein heaven seed hath nothing</p>
                                                <h5>$40.00</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- food_menu part end-->

        <!--::chefs_part start::-->
        <!-- <section class="chefs_part blog_item_section section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="section_tittle">
                            <p>Team Member</p>
                            <h2>Our Experience Chefs</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="single_blog_item">
                            <div class="single_blog_img">
                                <img src="img/team/chefs_1.png" alt="">
                            </div>
                            <div class="single_blog_text text-center">
                                <h3>Adam Billiard</h3>
                                <p>Chef Master</p>
                                <div class="social_icon">
                                    <a href="#"> <i class="ti-facebook"></i> </a>
                                    <a href="#"> <i class="ti-twitter-alt"></i> </a>
                                    <a href="#"> <i class="ti-instagram"></i> </a>
                                    <a href="#"> <i class="ti-skype"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="single_blog_item">
                            <div class="single_blog_img">
                                <img src="img/team/chefs_2.png" alt="">
                            </div>
                            <div class="single_blog_text text-center">
                                <h3>Fred Macyard</h3>
                                <p>Chef Master</p>
                                <div class="social_icon">
                                    <a href="#"> <i class="ti-facebook"></i> </a>
                                    <a href="#"> <i class="ti-twitter-alt"></i> </a>
                                    <a href="#"> <i class="ti-instagram"></i> </a>
                                    <a href="#"> <i class="ti-skype"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="single_blog_item">
                            <div class="single_blog_img">
                                <img src="img/team/chefs_3.png" alt="">
                            </div>
                            <div class="single_blog_text text-center">
                                <h3>Justin Stuard</h3>
                                <p>Chef Master</p>
                                <div class="social_icon">
                                    <a href="#"> <i class="ti-facebook"></i> </a>
                                    <a href="#"> <i class="ti-twitter-alt"></i> </a>
                                    <a href="#"> <i class="ti-instagram"></i> </a>
                                    <a href="#"> <i class="ti-skype"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 d-none d-sm-block d-lg-none">
                        <div class="single_blog_item">
                            <div class="single_blog_img">
                                <img src="img/team/chefs_1.png" alt="">
                            </div>
                            <div class="single_blog_text text-center">
                                <h3>Justin Stuard</h3>
                                <p>Chef Master</p>
                                <div class="social_icon">
                                    <a href="#"> <i class="ti-facebook"></i> </a>
                                    <a href="#"> <i class="ti-twitter-alt"></i> </a>
                                    <a href="#"> <i class="ti-instagram"></i> </a>
                                    <a href="#"> <i class="ti-skype"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--::chefs_part end::-->

        <!--::regervation_part start::-->
        <section class="regervation_part section_padding" id="booking">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="section_tittle">
                            <p>Регистрация</p>
                            <h2>Зарезервировать столик</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="regervation_part_iner">
                            <form>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <input type="text" class="form-control" id="name" placeholder="Ваше имя">
                                    </div>
                                    <!-- <div class="form-group col-md-6">
                                        <input type="password" class="form-control" id="inputPassword4"
                                            placeholder="Email address *">
                                    </div> -->
                                    <div class="form-group col-md-6">
                                        <select class="form-control" id="people_count">
                                            <option value="1" selected>Столик на * людей</option>
                                            <option value="2">Гостей 1</option>
                                            <option value="3">Гостей 2</option>
                                            <option value="4">Гостей 3</option>
                                            <option value="5">Гостей 4</option>
                                            <option value="5">Гостей 5</option>
                                            <option value="5">Гостей 6</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <input type="number" class="form-control" id="phone" placeholder="Ваш номер телефона">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="input-group date">
                                            <input id="datepicker" type="text" class="form-control" placeholder="В какой день вы посетите нас?" />
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <select class="form-control" id="time">
                                            <option value="" selected>В какое время вы приедете?</option>
                                            <option value="8:00 - 10:00">8:00 - 10:00</option>
                                            <option value="10:00 - 12:00">10:00 - 12:00</option>
                                            <option value="12:00 - 14:00">12:00 - 14:00</option>
                                            <option value="14:00 - 16:00">14:00 - 16:00</option>
                                            <option value="16:00 - 18:00">16:00 - 18:00</option>
                                            <option value="18:00 - 20:00">18:00 - 20:00</option>
                                            <option value="16:00 - 22:00">16:00 - 22:00</option>
                                            <option value="22:00 - 00:00">22:00 - 00:00</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <textarea class="form-control" id="user_note" rows="4"
                                            placeholder="Ваше примечание"></textarea>
                                    </div>
                                </div>


                                <div class="regerv_btn">
                                    <a href="#" onclick="send();" class="btn_4">Забронировать столик</a>
                                    <script>
                                    function send (){
                                        
                                        var name = document.getElementById('name').value;
                                        var count = document.getElementById('people_count').value;
                                        var phone = document.getElementById('phone').value;
                                        var date = document.getElementById('datepicker').value;
                                        var time = document.getElementById('time').value;
                                        var user_note = document.getElementById('user_note').value;

                                        var text = "Привет, меня зовут "+name+". Я хотел бы вас посетить "+date+" в "+time+". Подготовите столик на "+count+" человек. \n"+user_note+"\n Номер для связи:"+phone+"";
                                        text = encodeURI(text);
                                        console.log(text);
                                        window.location.replace('https://wa.me/77472470616/?text='+text);

                                        return false;
                                    }
                                </script>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--::regervation_part end::-->

        <!--::review_part start::-->
        <section class="review_part gray_bg section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="section_tittle">
                            <h2>Отзывы посетителей</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-11">
                        <div class="client_review_part owl-carousel">
                            <div class="client_review_single media">
                                <div class="client_img align-self-center">
                                    <img src="img/client/client_1.png" alt="">
                                </div>
                                <div class="client_review_text media-body">
                                    <p>
                                        Все круто, особенно сеты из суши и роллов. Ночной дожор перехватывает меня особенно в середине ночи, когда все уже закрылись. Но Коно Пицца доставляет всегда и везде. Блин, круто!!!
                                    </p>
                                    <h4>Сергей Иванов <span></span></h4>
                                </div>
                            </div>
                            <div class="client_review_single media">
                                <div class="client_img align-self-center">
                                    <img src="img/client/client_1.png " alt="">
                                </div>
                                <div class="client_review_text media-body">
                                    <p>
                                        И еще, спасибо Коно за Пиццу ночью
                                    </p>
                                    <h4>Сергей Иванов <span></span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--::review_part end::-->

        <!--::exclusive_item_part start::-->
        <!-- <section class="blog_item_section blog_section section_padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5">
                        <div class="section_tittle">
                            <p>Recent News</p>
                            <h2>Latest From Blog</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="single_blog_item">
                            <div class="single_blog_img">
                                <img src="img/blog/blog_1.png" alt="">
                            </div>
                            <div class="single_blog_text">
                                <div class="date">
                                    <a href="#" class="date_item">Apr 06, 2019 </a>
                                    <a href="#" class="date_item"> <span>#</span> Food News </a>
                                </div>
                                <h3><a href="blog.html">Adama kind deep gatherin first over fter his great</a></h3>
                                <a href="#" class="btn_3">Read More <img src="img/icon/left_1.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="single_blog_item">
                            <div class="single_blog_img">
                                <img src="img/blog/blog_2.png" alt="">
                            </div>
                            <div class="single_blog_text">
                                <div class="date">
                                    <a href="#" class="date_item">Apr 06, 2019 </a>
                                    <a href="#" class="date_item"> <span>#</span> Food News </a>
                                </div>
                                <h3><a href="blog.html">Adama kind deep gatherin first over fter his great</a></h3>
                                <a href="#" class="btn_3">Read More <img src="img/icon/left_1.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="single_blog_item">
                            <div class="single_blog_img">
                                <img src="img/blog/blog_3.png" alt="">
                            </div>
                            <div class="single_blog_text">
                                <div class="date">
                                    <a href="#" class="date_item">Apr 06, 2019 </a>
                                    <a href="#" class="date_item"> <span>#</span> Food News </a>
                                </div>
                                <h3><a href="blog.html">Adama kind deep gatherin first over fter his great</a></h3>
                                <a href="#" class="btn_3">Read More <img src="img/icon/left_1.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4 d-none d-sm-block d-lg-none">
                        <div class="single_blog_item">
                            <div class="single_blog_img">
                                <img src="img/blog/blog_1.png" alt="">
                            </div>
                            <div class="single_blog_text">
                                <div class="date">
                                    <a href="#" class="date_item">Apr 06, 2019 </a>
                                    <a href="#" class="date_item"> <span>#</span> Food News </a>
                                </div>
                                <h3><a href="blog.html">Adama kind deep gatherin first over fter his great</a></h3>
                                <a href="#" class="btn_3">Read More <img src="img/icon/left_1.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!--::exclusive_item_part end::-->
    </div>

@endsection