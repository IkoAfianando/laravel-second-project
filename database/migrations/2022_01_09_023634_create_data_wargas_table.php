<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataWargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_wargas', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 30);
            $table->string('foto', 255);
            $table->string('alamat', 255);
            $table->time('tanggal_lahir');
            $table->string('email', 50);
            $table->string('jenis_kelamin', 30);
            $table->string('status_perkawinan', 150);
            $table->string('status_warga', 150);
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
        Schema::dropIfExists('data_wargas');
    }
}
