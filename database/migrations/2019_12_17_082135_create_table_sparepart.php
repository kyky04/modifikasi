<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSparepart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('sparepart', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->string('quality');
          $table->string('price');
          $table->integer('component_id')->unsigned();

          $table->foreign('component_id')->references('id')->on('component')->onDelete('cascade');

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
        Schema::dropIfExists('sparepart');
    }
}
