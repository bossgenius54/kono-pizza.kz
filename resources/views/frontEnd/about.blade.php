@extends('frontEnd.layouts.main')
@section('title','О Нас')
@section('content')

    <div>
        
        <!-- breadcrumb start-->
        <section class="breadcrumb breadcrumb_bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb_iner text-center">
                            <div class="breadcrumb_iner_item">
                                <h2>Акции & Бонусы</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb start-->

        <!-- about part start-->
        <section class="about_part">
            <div class="container-fluid client_review_part owl-carousel">
                @foreach($bonuses as $bonus)
                <div class="row align-items-center">
                    <div class="col-sm-4 col-lg-5 offset-lg-1">
                        <div class="about_img">
                            <img src="{{$bonus->image}}" alt="{{$bonus->b_offer}}">
                        </div>
                    </div>
                    <div class="col-sm-8 col-lg-4" id="bonus">
                        <div class="about_text">
                            <h5>Тук-Тук</h5>
                            <h2>Хочешь сэкономить?</h2>
                            <h4>{{$bonus->b_offer}}</h4>
                            <p>
                                {{$bonus->b_description}}
                            </p>
                            <a href="#" class="btn_3">Получить <img src="img/icon/left_2.svg" alt=""></a> 
                            <!-- TODO Link -->
                        </div>

                    </div>
                </div>
                @endforeach

            </div>
            <script>
                $(document).ready(function() {
                    $("#bonus").owlCarousel();
                });
            </script>
        </section>
        <!-- about part end-->
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

    </div>

@endsection