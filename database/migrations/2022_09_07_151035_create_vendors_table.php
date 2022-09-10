<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendor', function (Blueprint $table) {
            $table->id();
            $table->string('kodevendor',10);
            $table->string('namavendor',30);
            $table->string('alamatvendor',200);
            $table->string('kab',80);
            $table->bigInteger('idprovinsi')->unsigned();
            $table->string('kodepos',5);
            $table->string('nomortelepon',15);
            $table->string('email',50);
            $table->string('npwp',16);
            $table->string('nik',16);
            $table->timestamps();

            $table->foreign('idprovinsi')->references('id')->on('provinsi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vendors');
    }
}
