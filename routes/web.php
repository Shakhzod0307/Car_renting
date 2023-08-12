<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('/',[HomeController::class, 'index'])->name('index');

Route::get('about',[HomeController::class, 'about'])->name('about');

Route::get('services',[HomeController::class, 'services'])->name('services');

Route::get('pricing',[HomeController::class, 'pricing'])->name('pricing');

Route::get('cars',[HomeController::class, 'cars'])->name('cars');

Route::get('contact',[HomeController::class, 'contact'])->name('contact');



Route::get('blog',[BlogController::class, 'blog'])->name('blog');
Route::get('single_blog',[BlogController::class, 'single_blog'])->name('single_blog');



Route::get('car_detail/{id}',[HomeController::class, 'car_detail'])->name('car_detail');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::group(['middleware'=>'auth'],function(){

    Route::get('cart/{id}',[CartController::class, 'cart'])->name('cart');
    Route::post('cart/{id}',[CartController::class, 'order'])->name('order');

    Route::get('orders',[CartController::class, 'user_order'])->name('user_order');

    Route::get('order_canceled/{id}',[CartController::class, 'order_cancel'])->name('order_cancel');



    //admin routes
    Route::get('admin',[AdminController::class, 'admin'])->name('admin');

    Route::get('admin/car/delete/{id}',[AdminController::class, 'car_delete'])->name('car_delete');
    Route::get('admin/car/view/{id}',[AdminController::class, 'car_view'])->name('car_view');

    Route::get('admin/car/add',[AdminController::class, 'car_add'])->name('car_add');
    Route::post('admin/car/view',[AdminController::class, 'car_store'])->name('car_store');

    Route::get('admin/car/edit/{id}',[AdminController::class, 'car_edit'])->name('car_edit');
    Route::post('admin/car/{id}/edited',[AdminController::class, 'car_update'])->name('car_update');

    // admin blog routes
    Route::get('admin/blog',[AdminController::class, 'admin_blog'])->name('admin_blog');

    Route::get('admin/blog/delete/{id}',[AdminController::class, 'blog_delete'])->name('blog_delete');
    Route::get('admin/blog/view/{id}',[AdminController::class, 'blog_view'])->name('blog_view');

    Route::get('admin/blog/add',[AdminController::class, 'blog_add'])->name('blog_add');
    Route::post('admin/blog/view',[AdminController::class, 'blog_store'])->name('blog_store');

    Route::get('admin/blog/edit/{id}',[AdminController::class, 'blog_edit'])->name('blog_edit');
    Route::post('admin/blog/{id}/edited',[AdminController::class, 'blog_update'])->name('blog_update');

    Route::get('admin/orders',[AdminController::class, 'admin_orders'])->name('admin_orders');

});
