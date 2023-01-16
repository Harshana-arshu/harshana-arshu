<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('to_add_post_', function (Blueprint $table) {
            $table->id();
        $table->integer('user_id');
        $table->integer('category_id');
        $table->integer('model_id');
        $table->string('phone_number')->nullable();
        $table->double('price',11,2);
        $table->string('description')->nullable();
        $table->integer('warranty');
        $table->string('condition')->nullable();
        $table->string('color')->nullable();
        $table->string('damage')->nullable();
        $table->integer('location_id');
        $table->integer('district_id');
        $table->integer('age');
        $table->integer('BH');
        $table->string('admin')->nullable();
        $table->integer('status')->default(0);
        $table->timestamps();
        $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('to_add_post');
    }
};
