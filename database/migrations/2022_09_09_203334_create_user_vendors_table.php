<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uservendor', function (Blueprint $table) {
            $table->id();
            $table->string('username', 20);
            $table->string('password', 150);
            $table->string('remark', 200);
            $table->string('status', 1);
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
        Schema::dropIfExists('user_vendors');
    }
}
