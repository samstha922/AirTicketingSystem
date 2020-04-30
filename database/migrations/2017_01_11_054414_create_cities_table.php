<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('cities', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('city_name');
            $table->string('iata_code');
            $table->string('icao_code');
            $table->string('airport_name');
            $table->integer('timezone_id')->unsigned()->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

       Schema::table('cities',function($table){
            $table->foreign('timezone_id')->references('id')->on('timezones')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cities');
    }
}
