<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Cart;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function cart(string $id)
    {

        $cars = Car::find($id);
        return view('mainpage.cart')->with('car',$cars);
    }


    public function order(Request $request, string $id):RedirectResponse
    {

        $car = Car::find($id);
        $price_car = abs(strtotime($request->pick_up_date) - strtotime($request->drop_off_date));
        $price_day_car = floor($price_car / (60*60*24));

        $order = new Cart;

        $order->user_id = Auth::user()->id;
        $order->user_name = Auth::user()->name;
        $order->user_email = Auth::user()->email;
        $order->user_phone = Auth::user()->phone;

        $order->name = $car->name;
        $order->brand = $car->brand;
        $order->image = $car->image;
        $order->car_id = $car->id;
        $order->price = $car->price_day * $price_day_car ;
        $order->fuel = $car->fuel;

        $order->pick_up_loc = $request->pick_up_loc;
        $order->drop_off_loc= $request->drop_off_loc;
        $order->pick_up_date = $request->pick_up_date;
        $order->drop_off_date = $request->drop_off_date;
        $order->pick_up_time = $request->pick_up_time;

        $order->save();


        return redirect()->back()->with('success','Congratulations! We will connect with you soon... ');
    }

    public function user_order()
    {
        $id = Auth::user()->id;
        $orders = DB::table('carts')-> where( 'user_id', $id)->get();


        return view('mainpage.orders')->with('orders',$orders);
    }

    public function order_cancel(string $id)
    {
        $order = Cart::find($id);

        $order->delete();

        return redirect()->back()->with('success','Your order has been canceled successfully!');
    }

}
