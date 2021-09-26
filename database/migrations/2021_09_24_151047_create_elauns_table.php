<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElaunsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elauns', function (Blueprint $table) {
            $table->id()->index();
            $table->string('nama_elaun1')->nullable();
            $table->integer('jumlah_elaun1')->nullable();
            $table->string('nama_elaun2')->nullable();
            $table->integer('jumlah_elaun2')->nullable();
            $table->string('nama_elaun3')->nullable();
            $table->integer('jumlah_elaun3')->nullable();
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
        Schema::dropIfExists('elauns');
    }
}
