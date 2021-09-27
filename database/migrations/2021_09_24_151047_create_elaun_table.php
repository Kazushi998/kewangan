<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElaunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elaun', function (Blueprint $table) {
            $table->id()->index();
            $table->string('nama_elaun1')->nullable();
            $table->integer('jumlah_elaun1')->nullable();
            $table->string('nama_elaun2')->nullable();
            $table->integer('jumlah_elaun2')->nullable();
            $table->string('nama_elaun3')->nullable();
            $table->integer('jumlah_elaun3')->nullable();
            $table->string('nama_elaun4')->nullable();
            $table->integer('jumlah_elaun4')->nullable();
            $table->string('nama_elaun5')->nullable();
            $table->integer('jumlah_elaun5')->nullable();
            $table->string('nama_elaun6')->nullable();
            $table->integer('jumlah_elaun6')->nullable();
            $table->string('nama_elaun7')->nullable();
            $table->integer('jumlah_elaun7')->nullable();
            $table->string('nama_elaun8')->nullable();
            $table->integer('jumlah_elaun8')->nullable();
            $table->string('nama_elaun9')->nullable();
            $table->integer('jumlah_elaun9')->nullable();
            $table->string('nama_elaun10')->nullable();
            $table->integer('jumlah_elaun10')->nullable();
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
        Schema::dropIfExists('elaun');
    }
}
