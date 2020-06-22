<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithimagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withimages', function (Blueprint $table) {
            $table->id();
            $table->string('no_kk', 50)->unique();
            $table->string('nama', 30);
            $table->string('jenis_kelamin', 1);
            $table->text('alamat');
            $table->string('status', 15);
            $table->string('pendidikan', 3);
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('withimages');
    }
}
