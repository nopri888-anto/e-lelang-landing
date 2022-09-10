<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokumensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokumen', function (Blueprint $table) {
            $table->id();
            $table->string('npwp', 150);
            $table->string('aktausaha', 150);
            $table->string('dokumenindukusaha', 150);
            $table->string('workshop', 150);
            $table->string('suratpernyataan', 150);
            $table->string('suratpendaftaran', 150);
            $table->bigInteger('idvendor')->unsigned();
            $table->timestamps();
            
            $table->foreign('idvendor')->references('id')->on('vendor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dokumens');
    }
}
