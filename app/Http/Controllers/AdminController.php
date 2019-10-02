<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Image;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class AdminController extends Controller
{
    //
    public function index () {
        $menu_active = 1;
        $text = '';
        return view('admin.main',compact('menu_active'));
    }

    public function menu () {
        $menu_active = 2;
        $text = '';
        return view('admin.menu',compact('menu_active'));
    }
    public function order () {
        $menu_active = 3;
        $text = '';
        return view('admin.order',compact('menu_active'));
    }
    public function bonus () {
        $menu_active = 4;
        $text = '';
        return view('admin.bonus',compact('menu_active'));
    }
}
