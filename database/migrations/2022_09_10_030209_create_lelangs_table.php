<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLelangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lelang', function (Blueprint $table) {
            $table->id();
            $table->string('kodelelang', 15);
            $table->string('namalelang', 100);
            $table->string('tanggallelang', 15);
            $table->string('tanggalmulailelang', 15);
            $table->string('tanggalselesailelang', 15);
            $table->string('satuankerja', 50);
            $table->string('lokasilelang', 150);
            $table->string('kab', 100);
            $table->bigInteger('idprovinsi')->unsigned();
            $table->string('nilaipagu', 12);
            $table->string('nilaihps', 12);
            $table->string('statuslelang', 50);
            $table->string('jeniskontrak', 50);
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
        Schema::dropIfExists('lelangs');
    }
}
