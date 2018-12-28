<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBusinessLaundryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_laundry', function (Blueprint $table) {
           $table->increments('id');
             $table->integer('laundry_id')->unsigned()->nullable();
            $table->foreign('laundry_id')->references('id')
            ->on('laundry')->onDelete('cascade');
             $table->integer('business_id')->unsigned()->nullable();
            $table->foreign('business_id')->references('id')
            ->on('laundry')->onDelete('cascade'); 
            $table->time('open_time');
           // $table->foreign('open_time')->references('id') 
           // ->on('laundry')->onDelete('cascade');
            $table->time('close_time');
           // $table->foreign('close_time')->references('id') 
           // ->on('laundry')->onDelete('cascade');       
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
        Schema::dropIfExists('business_laundry');
    }
}
