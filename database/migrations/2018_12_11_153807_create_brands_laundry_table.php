<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandsLaundryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brands_laundry', function (Blueprint $table) {
            $table->increments('id');
             $table->integer('laundry_id')->unsigned()->nullable();
            $table->foreign('laundry_id')->references('id')
            ->on('laundry')->onDelete('cascade');
             $table->integer('brand_id')->unsigned()->nullable();
            $table->foreign('brand_id')->references('id')
            ->on('brands')->onDelete('cascade');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('brands_laundry');
    }
}
