<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Client;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function adminHome()
    {
        return view('adminHome');
    }
    public function home()
    {
        $data['product']=Product::orderBy('id','asc')->where('status','1')->take(1)->get();
        $data['blog']=Blog::orderBy('id','desc')->where('status','1')->take(5)->get();
        $data['client']=Client::orderBy('id','asc')->take(20)->get();
        $data['products']=Product::orderBy('id','asc')->take(20)->get();
        $data['category']=Category::orderBy('id','asc')->take(20)->get();
        $data['setting']=Setting::all();
        return view('home',compact('data'));
    }

    public function product(){
        $data['product']=Product::orderBy('id','desc')->where('status','1')->get();
        $data['product_category']=Category::where('status','1')->get();
        return view('frontend1.product.product',compact('data'));
    }
    public function blog($id){
        $data['row'] = Blog::find($id);
        //  $data['blog']=Blog::orderBy('id','desc')->where('status','1')->get();
        return view('frontend1.blog.blogview',compact('data'));
    }
    public function contact(){
        $data['contact']=Setting::orderBy('id','desc')->where('status','1')->get();
        return view('frontend1.contact',compact('data'));
    }
    public function blogs(){
        $data['blogs'] = Blog::all();
        return view('frontend1.blog.index',compact('data'));

    }
    public function setting(){
        $data['setting'] = Setting::all();
        return view('frontend1.contact',compact('data'));

    }



}
