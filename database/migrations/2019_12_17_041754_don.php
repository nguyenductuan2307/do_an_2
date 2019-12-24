<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Don extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('don', function (Blueprint $table) {
           $table->increments('ma');
           $table->integer('nha_cung_cap')->unsigned();
           $table->foreign('nha_cung_cap')->references('ma')->on('nha_cung_cap');
           $table->integer('admin')->unsigned();
           $table->foreign('admin')->references('ma')->on('admin');
           $table->date('thoi_gian');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
                Schema::dropIfExists('don');
    }
}
