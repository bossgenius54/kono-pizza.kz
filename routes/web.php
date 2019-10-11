<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','FrontEndController@index')->name('main');

Route::get('/about', function () {
    return view('frontEnd/about');
})->name('about');

Route::get('/menu','FrontEndController@menu')->name('menu');
Route::get('/contact','FrontEndController@contact')->name('contact');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// #################################### Admin #######################

Route::prefix('admin')->group(function () {
    Route::get('/','AdminController@index')->middleware(['auth'])->name('admin_home');
    Route::get('/menu','AdminController@menu')->middleware(['auth'])->name('admin_menu');
    Route::post('/menu/c_category','AdminController@c_category')->middleware(['auth'])->name('admin_menu_add_cat');
    Route::delete('/menu/delete_category/{id}', 'AdminController@d_category');
    Route::post('/menu/c_food','AdminController@c_food')->middleware(['auth'])->name('admin_menu_add_food');
    Route::delete('/menu/delete_food/{id}', 'AdminController@d_food')->name('delete_food');
    Route::get('/order','AdminController@order')->middleware(['auth'])->name('admin_order');
    Route::get('/bonus','AdminController@bonus')->middleware(['auth'])->name('admin_bonus');
    Route::post('/menu/c_bonus','AdminController@c_bonus')->middleware(['auth'])->name('admin_menu_add_bonus');
    Route::delete('/menu/delete_bonus/{id}', 'AdminController@d_bonus')->name('delete_bonus');
});