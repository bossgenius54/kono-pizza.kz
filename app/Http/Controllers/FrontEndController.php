<?php

namespace App\Http\Controllers;

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
        // return view('frontEnd.index',compact('products'));
        return view('frontEnd.index',compact('text'));
    }

    public function menu() {
        $text = 'hello world';
        // return view('frontEnd.index',compact('products'));
        return view('frontEnd.menu',compact('text'));
    }

    public function contact() {
        return view('frontEnd.contact');
    }

    public function create_category() {
        
    }


}
