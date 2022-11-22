<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ujk', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->float('tinggi_badan');
            $table->float('berat_badan');
            $table->float('bmi');
            $table->string('status_bb');
            $table->string('hobi');
            $table->integer('umur');
            $table->string('konsultasi');
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
        Schema::dropIfExists('ujk');
    }
};
