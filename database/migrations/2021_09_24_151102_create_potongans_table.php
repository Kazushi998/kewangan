<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePotongansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('potongans', function (Blueprint $table) {
            $table->id()->index();
            $table->string('nama_potongan1')->nullable();
            $table->integer('jumlah_potongan1')->nullable();
            $table->string('nama_potongan2')->nullable();
            $table->integer('jumlah_potongan2')->nullable();
            $table->string('nama_potongan3')->nullable();
            $table->integer('jumlah_potongan3')->nullable();
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
        Schema::dropIfExists('potongans');
    }
}
