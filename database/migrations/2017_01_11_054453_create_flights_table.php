<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('flights', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('flight_no');

            $table->integer('source_id')->unsigned()->nullable();
            $table->foreign('source_id')->references('id')->on('cities')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('destination_id')->unsigned()->nullable();
            $table->foreign('destination_id')->references('id')->on('cities')->onDelete('cascade')->onUpdate('cascade');
           
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
        Schema::drop('flights');
    }
}
