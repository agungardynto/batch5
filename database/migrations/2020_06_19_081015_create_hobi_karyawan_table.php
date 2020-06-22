<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHobiKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hobi_karyawan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('karyawan_id')->unsigned()->index();
            $table->bigInteger('hobi_id')->unsigned()->index();
            $table->timestamps();

            $table->foreign('karyawan_id')->references('id')->on('karyawans')->onUpdate('cascade')->onUpdate('cascade');
            $table->foreign('hobi_id')->references('id')->on('hobis')->onUpdate('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hobi_karyawan');
    }
}
