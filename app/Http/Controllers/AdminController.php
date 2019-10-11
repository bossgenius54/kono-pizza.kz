<?php

namespace App\Http\Controllers;

use App\Category;
use App\Bonus;
use App\Food;
use App\Http\Controllers\Controller;
use Image;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
// use App\Traits\UploadTrait;


class AdminController extends Controller
{
    // use UploadTrait;
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index () {
        $menu_active = 1;
        $text = '';
        return view('admin.main',compact('menu_active'));
    }

    public function menu () {
        $menu_active = 2;
        $categories = Category::all();
        $foods = Food::all();
        $text = '';
        return view('admin.menu',compact(['menu_active','categories','foods']));
    }
    public function c_category (Request $request) {
        $this->validate($request,[
            'name'=>'required|min:4'
        ]);
        $formInput=$request->all();

        Category::create($formInput);
        return redirect()->route('admin_menu')->with('message','Категория была добавлена!');
    }
    public function d_category ($id) {
        $cat = Category::find($id);

        $cat->delete();
        return redirect()->route('admin_menu')->with('message','Категория была удалена!');
    }
    public function c_food (Request $request) {
        $this->validate($request,[
            'f_name'=>'required|min:4',
            'category_id'=>'required',
            'f_description'=>'required',
            'price'=>'required|numeric',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:4096'
        ]);
        $formInput=$request->all();

        if ($request->has('image')) {
            $image = $request->file('image');
            
            $name = str_slug($request->input('f_name')).'_'.time();
            $folder = '/uploads/images/';
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            $filename = $name;
            $name = !is_null($filename) ? $filename : str_random(25);
            $uploadedFile = $image;
            $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), 'public');

            $formInput['image'] = $filePath;
        }

        Food::create($formInput);

        return redirect()->route('admin_menu')->with('message','Элемент был добавлен успешно!');
    }
    public function d_food ($id) {
        $cat = Food::find($id);

        $cat->delete();
        return redirect()->route('admin_menu')->with('message','Элемент меню была удалена!');
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
    public function c_bonus () {
        $this->validate($request,[
            'b_offer'=>'required|min:4',
            'b_description'=>'required',
            'image'=>'required|image|mimes:png,jpg,jpeg'
        ]);
        $formInput=$request->all();

        if($request->file('image')){
            $image=$request->file('image');
            if($image->isValid()){
                $fileName=time().'-'.str_slug($formInput['b_offer'],"-").'.'.$image->getClientOriginalExtension();
                $large_image_path=public_path('offer/large/'.$fileName);
                $medium_image_path=public_path('offer/medium/'.$fileName);
                $small_image_path=public_path('offer/small/'.$fileName);
                //Resize Image
                Image::make($image)->save($large_image_path);
                Image::make($image)->resize(600,600)->save($medium_image_path);
                Image::make($image)->resize(300,300)->save($small_image_path);
                $formInput['image']=$fileName;
            }
        }


        Bonus::create($formInput);
        return redirect()->route('admin_menu')->with('message','Товар был добавлен успешно!');
    }
}
