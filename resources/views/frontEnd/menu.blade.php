@extends('frontEnd.layouts.main')
@section('title','Главная')
@section('content')

    <div>
        
        <!-- breadcrumb start-->
        <section class="breadcrumb breadcrumb_bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb_iner text-center">
                            <div class="breadcrumb_iner_item">
                                <h2>Наше меню</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- breadcrumb start-->

        <!--::chefs_part start::-->
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
                            @foreach($categories as $cat)

                                @if($cat->id == $categories[0]->id)
                                    <a class="active" id="{{$cat->id}}-tab" data-toggle="tab" href="#tab{{$cat->id}}" role="tab"
                                        aria-controls="tab{{$cat->id}}" aria-selected="false">{{$cat->name}} <img src="img/icon/play.svg"
                                            alt="play"></a>
                                @else
                                    <a class="" id="{{$cat->id}}-tab" data-toggle="tab" href="#tab{{$cat->id}}" role="tab"
                                        aria-controls="tab{{$cat->id}}" aria-selected="false">{{$cat->name}}</a>
                                @endif

                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="tab-content" id="myTabContent">
                            @foreach($categories as $cat)

                                @if($cat->id == $categories[0]->id)

                                    <div class="tab-pane fade show active single-member" id="tab{{$cat->id}}" role="tabpanel"
                                aria-labelledby="{{$cat->id}}-tab">
                                        <div class="row">

                                            @foreach($foods as $food)
                                            @if($food->category_id == $cat->id)
                                                <div class="col-sm-6 col-lg-12">
                                                    <div class="single_food_item media">
                                                        <img src="{{$food->image}}" class="mr-3" alt="..." width="300px" height="200px">
                                                        <div class="media-body align-self-center">
                                                            <h3>{{$food->f_name}}</h3>
                                                            <p>{{$food->f_description}}</p>
                                                            <h5 style="display: inline-block;">{{$food->price}} ₸</h5>
                                                            <a href="#" class="single_page_btn  d-sm-inline-block" style="margin:15px;">
                                                                Заказать по Whatsapp
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            @endforeach

                                        </div>
                                    </div>
                                
                                @else
                                    <div class="tab-pane fade single-member" id="tab{{$cat->id}}" role="tabpanel"
                                    aria-labelledby="{{$cat->id}}-tab">
                                        <div class="row">

                                            @foreach($foods as $food)
                                            @if($food->category_id == $cat->id)
                                                <div class="col-sm-6 col-lg-12">
                                                    <div class="single_food_item media">
                                                        <img src="{{$food->image}}" class="mr-3" alt="..." width="300px" height="200px">
                                                        <div class="media-body align-self-center">
                                                            <h3>{{$food->f_name}}</h3>
                                                            <p>{{$food->f_description}}</p>
                                                            <h5 style="display: inline-block;">{{$food->price}} ₸</h5>
                                                            <a href="#" class="single_page_btn  d-sm-inline-block" style="margin:15px;">
                                                                Заказать по Whatsapp
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                            @endforeach

                                        </div>
                                    </div>

                                @endif

                            @endforeach
                            
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
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- food_menu part end-->
        <!--::chefs_part end::-->

        <!-- intro_video_bg start-->
        <section class="intro_video_bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="intro_video_iner text-center">
                            <h2>Expect The Best</h2>
                            <div class="intro_video_icon">
                                <a id="play-video_1" class="video-play-button popup-youtube"
                                    href="https://www.youtube.com/watch?v=pBFQdxA-apI">
                                    <span class="ti-control-play"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- intro_video_bg part start-->

    </div>

@endsection