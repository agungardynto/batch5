<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeleponsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('telepons', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('karyawan_id')->unsigned();
            $table->bigInteger('nomor');
            $table->timestamps();

            $table->foreign('karyawan_id')->references('id')->on('karyawans')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('telepons');
    }
}
