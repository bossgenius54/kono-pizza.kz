@extends('admin.layouts.master')
@section('title','Админ Главная')
@section('content')
    <div class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Панель Меню</h4>
                  <p class="card-category">Конструктор меню в клиентском сайте по адресу <a style="text-decoration:underline;" href="{{route('menu')}}">Ссылка</a></p>
                </div>
                <div class="card-body">
                    <h2>Панель Меню</h2>  

                    <p>
                        Что бы добавить, категории и элементы меню, нужно использовать окна ниже. Сперва проверьте, есть ли категория, которая нужна вам, для добавления элемента меню.
                    </p>

                </div>
              </div>
            </div>
          </div>


          <div class="row">
            <div class="col-md-4">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Добавить Категорию</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                  <h2></h2>  

                  <p>
                      Добавить категории можете просто заполнив форму ниже и отправить.
                  </p>

                  <div>
                    <h4>Все категории: </h4>
                    
                    @foreach($categories as $cat)
                      <div class="alert alert-warning">
                        <form action="/admin/menu/delete_category/{{ $cat->id }}" method="POST" name="cat_add_form">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button class="close" >
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{$cat->name}}</span>

                        </form>
                      </div>
                    @endforeach

                  </div>

                  <h4>Добавление категории</h4>

                  <form action="{{route('admin_menu_add_cat')}}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Имя категории</label>
                          <input type="text" class="form-control" name="name">
                          <p class="text-muted">Не менее 4 символов</p>
                        </div>
                      </div>
                    </div>

                    <button type="submit" class="btn btn-primary pull-right">Добавить категорию</button>
                    <div class="clearfix"></div>
                  </form>

                </div>
              </div>
            </div>
          
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Добавить элемент меню</h4>
                  <p class="card-category"></p>
                </div>
                <div class="card-body">
                    <h4>Все поля являются объязательными</h4>  

                  <form action="{{route('admin_menu_add_food')}}" method="post" role="form" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row">
                      <div class="col-md-9">
                        <div class="form-group">
                          <label class="bmd-label-floating">Название</label>
                          <input type="text" class="form-control" name="f_name">
                          <span class="text-danger">{{$errors->first('f_name')}}</span>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-9">
                        <div class="form-group">
                          <label class="bmd-label-floating">Категория</label>
                          <select name="category_id" class="form-control">
                          
                          @foreach($categories as $cat)
                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                          @endforeach
                          </select>
                          <span class="text-danger">{{$errors->first('category_id')}}</span>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Цена в тенге</label>
                          <input type="number" class="form-control" name="price">
                          <span class="text-danger">{{$errors->first('price')}}</span>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Описание</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"> Опишите еду или напиток.</label>
                            <textarea class="form-control" rows="5" name="f_description"></textarea>
                          <span class="text-danger">{{$errors->first('f_description')}}</span>
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

                      @foreach($foods as $food)

                        @foreach($categories as $cat)

                          @if($cat->id == $food->category_id)
                            <tr>
                              <td class="text-primary" title="{{$food->f_description}}">
                                {{$food->f_name}}
                              </td>
                              <td>
                                {{$cat->name}}
                              </td>
                              <td>
                                {{$food->price}} ₸
                              </td>
                              <td>
                                <img src="{{$food->image}}" alt="{{$food->name}}" width="100">
                              </td>
                              <td>
                                <form action="/admin/menu/delete_food/{{ $food->id }}" method="POST">
                                  {{ csrf_field() }}
                                  {{ method_field('DELETE') }}
                                  <button class="close">
                                    <i style="color:red;" class="material-icons">close</i>
                                  </button>

                                </form>
                              </td>
                            </tr>

                          @endif
                        @endforeach
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