<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePotonganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('potongan', function (Blueprint $table) {
            $table->id()->index();
            $table->string('nama_potongan1')->nullable();
            $table->integer('jumlah_potongan1')->nullable();
            $table->string('nama_potongan2')->nullable();
            $table->integer('jumlah_potongan2')->nullable();
            $table->string('nama_potongan3')->nullable();
            $table->integer('jumlah_potongan3')->nullable();
            $table->string('nama_potongan4')->nullable();
            $table->integer('jumlah_potongan4')->nullable();
            $table->string('nama_potongan5')->nullable();
            $table->integer('jumlah_potongan5')->nullable();
            $table->string('nama_potongan6')->nullable();
            $table->integer('jumlah_potongan6')->nullable();
            $table->string('nama_potongan7')->nullable();
            $table->integer('jumlah_potongan7')->nullable();
            $table->string('nama_potongan8')->nullable();
            $table->integer('jumlah_potongan8')->nullable();
            $table->string('nama_potongan9')->nullable();
            $table->integer('jumlah_potongan9')->nullable();
            $table->string('nama_potongan10')->nullable();
            $table->integer('jumlah_potongan10')->nullable();
            $table->string('nama_potongan11')->nullable();
            $table->integer('jumlah_potongan11')->nullable();
            $table->string('nama_potongan12')->nullable();
            $table->integer('jumlah_potongan12')->nullable();
            $table->string('nama_potongan13')->nullable();
            $table->integer('jumlah_potongan13')->nullable();
            $table->string('nama_potongan14')->nullable();
            $table->integer('jumlah_potongan14')->nullable();
            $table->string('nama_potongan15')->nullable();
            $table->integer('jumlah_potongan15')->nullable();
            $table->string('nama_potongan16')->nullable();
            $table->integer('jumlah_potongan16')->nullable();
            $table->string('nama_potongan17')->nullable();
            $table->integer('jumlah_potongan17')->nullable();
            $table->string('nama_potongan18')->nullable();
            $table->integer('jumlah_potongan18')->nullable();
            $table->string('nama_potongan19')->nullable();
            $table->integer('jumlah_potongan19')->nullable();
            $table->string('nama_potongan20')->nullable();
            $table->integer('jumlah_potongan20')->nullable();
            $table->string('nama_potongan21')->nullable();
            $table->integer('jumlah_potongan21')->nullable();
            $table->string('nama_potongan22')->nullable();
            $table->integer('jumlah_potongan22')->nullable();
            $table->string('nama_potongan23')->nullable();
            $table->integer('jumlah_potongan23')->nullable();
            $table->string('nama_potongan24')->nullable();
            $table->integer('jumlah_potongan24')->nullable();
            $table->string('nama_potongan25')->nullable();
            $table->integer('jumlah_potongan25')->nullable();
            $table->string('nama_potongan26')->nullable();
            $table->integer('jumlah_potongan26')->nullable();
            $table->string('nama_potongan27')->nullable();
            $table->integer('jumlah_potongan27')->nullable();
            $table->string('nama_potongan28')->nullable();
            $table->integer('jumlah_potongan28')->nullable();
            $table->string('nama_potongan29')->nullable();
            $table->integer('jumlah_potongan29')->nullable();
            $table->string('nama_potongan30')->nullable();
            $table->integer('jumlah_potongan30')->nullable();
            $table->string('nama_potongan31')->nullable();
            $table->integer('jumlah_potongan31')->nullable();
            $table->string('nama_potongan32')->nullable();
            $table->integer('jumlah_potongan32')->nullable();
            $table->string('nama_potongan33')->nullable();
            $table->integer('jumlah_potongan33')->nullable();
            $table->string('nama_potongan34')->nullable();
            $table->integer('jumlah_potongan34')->nullable();
            $table->string('nama_potongan35')->nullable();
            $table->integer('jumlah_potongan35')->nullable();
            $table->string('nama_potongan36')->nullable();
            $table->integer('jumlah_potongan36')->nullable();
            $table->string('nama_potongan37')->nullable();
            $table->integer('jumlah_potongan37')->nullable();
            $table->string('nama_potongan38')->nullable();
            $table->integer('jumlah_potongan38')->nullable();
            $table->string('nama_potongan39')->nullable();
            $table->integer('jumlah_potongan39')->nullable();
            $table->string('nama_potongan40')->nullable();
            $table->integer('jumlah_potongan40')->nullable();
            $table->string('nama_potongan41')->nullable();
            $table->integer('jumlah_potongan41')->nullable();
            $table->string('nama_potongan42')->nullable();
            $table->integer('jumlah_potongan42')->nullable();
            $table->string('nama_potongan43')->nullable();
            $table->integer('jumlah_potongan43')->nullable();
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
        Schema::dropIfExists('potongan');
    }
}
