@extends('admin.layouts.master')
@section('title','Акции и Бонусы')
@section('content')
    <div class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Панель Акции и Бонусы</h4>
                  <p class="card-category">Конструктор бонусов и акции в клиентском сайте по адресу <a style="text-decoration:underline;" href="{{route('main')}}">Ссылка</a></p>
                </div>
                <div class="card-body">
                    <h4>Все поля являются объязательными</h4>  

                  <form action="{{route('admin_menu_add_bonus')}}" method="post" role="form" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row">
                      <div class="col-md-9">
                        <div class="form-group">
                          <label class="bmd-label-floating">Предложение</label>
                          <input type="text" class="form-control" name="b_offer">
                          <span class="text-danger">{{$errors->first('b_offer')}}</span>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Описание</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"> Опишите детальней.</label>
                            <textarea class="form-control" rows="5" name="b_description"></textarea>
                          <span class="text-danger">{{$errors->first('b_description')}}</span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="control-group">
                          <label class="">Фото</label>
                          <div class="controls">
                              <input type="file" name="image" id="image"/>
                              <span class="text-danger">{{$errors->first('image')}}</span>
                          </div>
                        </div>
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary pull-right">Добавить</button>
                    <div class="clearfix"></div>
                  </form>

                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-md-12">


              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Элементы меню</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <tr>
                          <th>
                            Название еды
                          </th>
                          <th>
                            Категория
                          </th>
                          <th>
                            Цена
                          </th>
                          <th>
                            Фото
                          </th>
                          <th>
                            
                          </th>
                        </tr>
                      </thead>
                      <tbody>

                      @foreach($bonuses as $bonus)

                            <tr>
                              <td class="text-primary" title="{{$bonus->b_description}}">
                                {{$bonus->b_offer}}
                              </td>
                              <td>
                                testing
                              </td>
                              <td>
                                testing
                              </td>
                              <td>
                                <img src="{{$bonus->image}}" alt="{{$bonus->b_offer}}" width="100">
                              </td>
                              <td>
                                <form action="/admin/menu/delete_bonus/{{ $bonus->id }}" method="POST">
                                  {{ csrf_field() }}
                                  {{ method_field('DELETE') }}
                                  <button class="close">
                                    <i style="color:red;" class="material-icons">close</i>
                                  </button>

                                </form>
                              </td>
                            </tr>

                      @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>

@endsection