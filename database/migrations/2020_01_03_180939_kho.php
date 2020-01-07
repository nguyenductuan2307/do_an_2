<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kho extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kho', function (Blueprint $table) {
            $table->integer('ma_san_pham')->unsigned();
            $table->foreign('ma_san_pham')->references('ma')->on('san_pham');
            $table->date('ngay');
            $table->float('nhap');
            $table->float('xuat');
            $table->primary([ 'ngay', 'ma_san_pham' ]);

        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
