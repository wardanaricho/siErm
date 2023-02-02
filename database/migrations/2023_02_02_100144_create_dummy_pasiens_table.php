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
        Schema::create('dummy_pasiens', function (Blueprint $table) {
            $table->id();
            $table->string('no_rkm_medik');
            $table->string('nama');
            $table->string('tempatLahir');
            $table->date('tglLahir');
            $table->enum('gender', ['L', 'P']);
            $table->enum('kewarganegaraan', ['WNI', 'WNA']);
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
        Schema::dropIfExists('dummy_pasiens');
    }
};
