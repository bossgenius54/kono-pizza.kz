@extends('admin.layouts.master')
@section('title','Админ Главная')
@section('content')
    <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Привет, {{ Auth::user()->name }}</h4>
                  <p class="card-category">Вы сейчас находитесь на административном панели 
                    {{ config('app.name', 'Kono Pizza!') }}</p>
                </div>
                <div class="card-body">
                    <h2>Административная панель</h2>  

                    <p>
                        В этой панели вы можете добавлять, удалять элементы ниже. Что бы изменить элементы, вам нужно пройти в соответствующую страницу.
                    </p>

                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card card-profile">
                <div class="card-avatar">
                  <a href="#pablo">
                    <img class="img" src="/admin_panel/assets/img/pizza_icon_ava.jp2" />
                  </a>
                </div>
                <div class="card-body">
                    <h4 class="card-title">{{ Auth::user()->name }}</h4>
                    <p class="card-description">
                        <b>Ваш Email:</b> {{ Auth::user()->email }}
                    </p>
                    <!-- <a href="#pablo" class="btn btn-primary btn-round">Follow</a> -->
                    <a class="btn btn-primary btn-round" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Выйти') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection