<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Car;
use App\Models\Cart;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AdminController extends Controller
{
    public function admin()
    {
        if(Auth::user())
        {
            if(Auth::user()->role == 1)
            {
                $cars = Car::all();
                return view('admin.index')->with('cars',$cars);
            }
            else{
                return  redirect()->route('index');
            }
        }


    }


    public function car_delete(string $id):RedirectResponse
    {
        Car::destroy($id);
        return redirect()->back()->with('success','Car deleted successfully!');
    }


    public function car_view(string $id)
    {

        $cars = Car::find($id);

        return view('admin.car_view')->with('car',$cars);
    }

    public function car_add()
    {

        return view('admin.car_add');
    }


    public function car_store(Request $request)
    {

        $prod = Car::create([
            'name'=>$request->name,
            'brand'=>$request->brand,
            'image'=>$request->image,
            'price_day'=>$request->price_day,
            'mileage'=>$request->mileage,
            'transmission'=>$request->transmission,
            'seats'=>$request->seats,
            'luggage'=>$request->luggage,
            'fuel'=>$request->fuel,
            'description'=>$request->description,
        ]);
        if($request->file('image')){
            $file= $request->file('image');
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('/car_images'), $filename);
            $prod['image']= $filename;
        }
        $prod->image = $prod['image']= $filename;
        $prod->save();
        return redirect()->back()->with('success','Car created successfully!');

    }

    public function car_edit(string $id)
    {
        $cars = Car::find($id);
        return view('admin.car_edit')->with('car',$cars);
    }


    public function car_update(Request $request, string $id)
    {

        $car = Car::find($id);


        $car->name= $request->name;
        $car->brand= $request->brand;
        $car->price_day=$request->price_day;
        $car->mileage=$request->mileage;
        $car->transmission=$request->transmission;
        $car->seats=$request->seats;
        $car->luggage=$request->luggage;
        $car->fuel=$request->fuel;
        $car->description=$request->description;

        if($request->image)
        {
            $car->image = $request->image;

            if($request->file('image')){
                $file= $request->file('image');
                $filename= $file->getClientOriginalName();
                $file-> move(public_path('/car_images'), $filename);
                $car['image']= $filename;
            }
            $car->image = $car['image']= $filename;
        }

        $car->save();
        return redirect()->back()->with('success','Car updated successfully!');

    }

// admin blog


    public function admin_blog()
    {
        $blogs = Blog::all();
        return view('admin.blog')->with('blogs',$blogs);
    }


    public function blog_delete(string $id):RedirectResponse
    {
        Blog::destroy($id);
        return redirect()->back()->with('success','Blog Post deleted successfully!');
    }


    public function blog_view(string $id)
    {

        $blogs = Blog::find($id);

        return view('admin.blog_view')->with('blog',$blogs);
    }

    public function blog_add()
    {

        return view('admin.blog_add');
    }


    public function blog_store(Request $request)
    {

        $blog = Blog::create([
            'title'=>$request->title,
            'superuser'=>Auth::user()->name,
            'image'=>$request->image,

            'description'=>$request->description,
        ]);
        if($request->file('image')){
            $file= $request->file('image');
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('/blog_images'), $filename);
            $blog['image']= $filename;
        }
        $blog->image = $blog['image']= $filename;
        $blog->save();
        return redirect()->back()->with('success','Blog Post created successfully!');

    }

    public function blog_edit(string $id)
    {
        $blogs = Blog::find($id);
        return view('admin.blog_edit')->with('blog',$blogs);
    }


    public function blog_update(Request $request, string $id)
    {

        $blog = Blog::find($id);


        $blog->title= $request->title;

        $blog->superuser= Auth::user()->name;

        $blog->description=$request->description;

        if($request->image)
        {
            $blog->image = $request->image;

            if($request->file('image')){
                $file= $request->file('image');
                $filename= $file->getClientOriginalName();
                $file-> move(public_path('/blog_images'), $filename);
                $blog['image']= $filename;
            }
            $blog->image = $blog['image']= $filename;
        }

        $blog->save();
        return redirect()->back()->with('success','Blog Post updated successfully!');

    }

    public function admin_orders()
    {

        $orders = Cart::all();
        return view('admin.admin_orders')->with('orders',$orders);
    }

}
