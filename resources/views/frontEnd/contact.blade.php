@extends('frontEnd.layouts.main')
@section('title','Связаться с нами')
@section('content')

    <div>
        <!-- breadcrumb start-->
        <section class="breadcrumb breadcrumb_bg">
            <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                    <h2>Contact Us</h2>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>
        <!-- breadcrumb start-->

        <!-- ================ contact section start ================= -->
        <section class="contact-section section_padding">
            <div class="container">

            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Get in Touch</h2>
                </div>
                <div class="col-lg-8">
                    <a class="genric-btn success radius" href="http://2gis.kz/shymkent/profiles/70000001028296793,70000001032733079/center/69.61109161376955,42.309434575638484/zoom/13?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">
                        Посмотреть на карте Шымкента в 2GIS
                    </a>
                    <a href="#" class="genric-btn success-border radius">Написать в WhatsApp</a>
                    <br/>
                    <br/>
                    <a class="dg-widget-link" href="http://2gis.kz/shymkent/profiles/70000001028296793,70000001032733079/center/69.61109161376955,42.309434575638484/zoom/13?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">
                        Посмотреть на карте Шымкента
                    </a>
                    <script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script>
                    <script charset="utf-8">new DGWidgetLoader({"width":400,"height":380,"borderColor":"#a3a3a3","pos":{"lat":42.309434575638484,"lon":69.61109161376955,"zoom":13},"opt":{"city":"shymkent"},"org":[{"id":"70000001028296793"},{"id":"70000001032733079"}]});</script>
                    <noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
                </div>
                <div class="col-lg-4">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                    <h3>Buttonwood, California.</h3>
                    <p>Rosemead, CA 91770</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                    <h3>00 (440) 9865 562</h3>
                    <p>Mon to Fri 9am to 6pm</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                    <h3>support@colorlib.com</h3>
                    <p>Send us your query anytime!</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>
        <!-- ================ contact section end ================= -->

    </div>

@endsection