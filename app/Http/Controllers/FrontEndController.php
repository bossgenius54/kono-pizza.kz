<?php

namespace App\Http\Controllers;

use App\Category;
use App\Bonus;
use App\Food;
use App\Http\Controllers\Controller;
use Image;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class FrontEndController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Site Controller
    |--------------------------------------------------------------------------
    |
    |   This controller handling a full site just for guest. About functions explained below.
    |
    */

    public function index() {
        $text = 'hello world';
        $categories = Category::all();
        $foods = Food::all();
        $bonuses = Bonus::all();
        // return view('frontEnd.index',compact('products'));
        return view('frontEnd.index',compact(['text','categories','foods','bonuses']));
    }

    public function menu() {
        $text = 'hello world';
        $categories = Category::all();
        $foods = Food::all();
        // return view('frontEnd.index',compact('products'));
        return view('frontEnd.menu',compact('text','categories','foods'));
    }

    public function contact() {
        return view('frontEnd.contact');
    }

    public function about() {
        $bonuses = Bonus::all();
        return view('frontEnd.about',compact('bonuses'));
    }


}
