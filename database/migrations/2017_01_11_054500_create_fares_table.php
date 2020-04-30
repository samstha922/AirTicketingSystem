<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fares', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            
            $table->integer('flight_id')->unsigned()->nullable();
            $table->foreign('flight_id')->references('id')->on('flights')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('cabin_id')->unsigned()->nullable();
            $table->foreign('cabin_id')->references('id')->on('cabins')->onDelete('cascade')->onUpdate('cascade');


            $table->integer('rbd_id')->unsigned()->nullable();
            $table->foreign('rbd_id')->references('id')->on('rbds')->onDelete('cascade')->onUpdate('cascade');


            $table->string('price_local_oneway');
            $table->string('price_usd_oneway');
            $table->string('price_local_roundtrip');
            $table->string('price_usd_roundtrip');
            $table->integer('seat');
            $table->softDeletes();
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
        Schema::drop('fares');
    }
}
