<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('user_email');
            $table->string('user_phone');
            $table->string('name');
            $table->string('brand');
            $table->string('image');
            $table->string('user_id');
            $table->string('car_id');
            $table->string('price');
            $table->string('fuel');
            $table->string('pick_up_loc');
            $table->string('drop_off_loc');
            $table->string('pick_up_date');
            $table->string('drop_off_date');
            $table->string('pick_up_time');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
