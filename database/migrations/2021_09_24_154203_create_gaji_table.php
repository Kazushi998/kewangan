<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGajiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gaji', function (Blueprint $table) {
            $table->id();
            $table->string('tarikh');
            $table->string('user_ic');
            $table->unsignedBigInteger('elaun_id');
            $table->unsignedBigInteger('potongan_id');
            $table->integer('caruman_majikan');
            $table->integer('caruman_pekerja');
            $table->integer('gaji_pokok');
            $table->integer('gaji_bersih');
            $table->string('bank');
            $table->timestamps();

            $table->foreign('elaun_id')->references('id')->on('elaun')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('potongan_id')->references('id')->on('potongan')
                ->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_ic')->references('ic')->on('users')
                ->onUpdate('cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gaji');
    }
}
