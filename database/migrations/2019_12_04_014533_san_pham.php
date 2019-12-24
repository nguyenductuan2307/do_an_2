<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Sanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_pham', function (Blueprint $table) {
           $table->increments('ma');
           $table->string('ten',50);
           $table->integer('so_luong');
           $table->integer('nha_cung_cap')->unsigned();
           $table->foreign('nha_cung_cap')->references('ma')->on('nha_cung_cap');
           $table->date('ngay_nhap');
           $table->date('ngay_het_han');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('san_pham');
    }
}
