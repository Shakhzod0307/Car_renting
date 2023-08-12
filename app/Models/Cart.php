<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = ['name','brand','image','user_id','price','car_id','fuel','pick_up_loc','drop_off_loc','pick_up_date','drop_off_date','pick_up_time'];

}
