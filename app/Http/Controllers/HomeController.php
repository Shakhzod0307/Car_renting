<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Car;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        $blogs = Blog::all();
        return view('home')->with('cars',$cars)->with('blogs',$blogs);
    }

    public function about()
    {
        return view('mainpage.about');
    }

    public function services()
    {
        return view('mainpage.services');
    }

    public function pricing()
    {
        return view('mainpage.pricing');
    }

    public function cars()
    {
        $cars = Car::all();
        return view('mainpage.cars')->with('cars',$cars);
    }

    public function car_detail(string $id):View
    {
        $cars = Car::find($id);
        $brand = $cars->brand;
        $related = DB::table('cars')->where('brand',$brand)->get();
        // dd($related);
        return view('mainpage.car_detail')->with('car',$cars)->with('related',$related);
    }



    public function contact()
    {
        return view('mainpage.contact');
    }


}
