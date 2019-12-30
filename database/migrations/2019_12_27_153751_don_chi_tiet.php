<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Donchitiet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('don_chi_tiet', function (Blueprint $table) {
           $table->increments('ma');
           $table->integer('ma_don')->unsigned();
           $table->foreign('ma_don')->references('ma')->on('don');
           $table->integer('san_pham')->unsigned();
           $table->foreign('san_pham')->references('ma')->on('san_pham');
           $table->integer('so_luong');
        });    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('don_chi_tiet');
    }
}
