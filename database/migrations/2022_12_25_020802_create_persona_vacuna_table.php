<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonaVacunaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona_vacuna', function (Blueprint $table) {
            $table->unsignedBigInteger('persona_id');
            $table->foreign('persona_id')->references('id')->on('persona')->onDelete('cascade');

            $table->unsignedBigInteger('vacuna_id');
            $table->foreign('vacuna_id')->references('id')->on('vacuna')->onDelete('cascade');

            $table->primary(['persona_id', 'vacuna_id']);
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
        Schema::dropIfExists('persona_vacuna');
    }
}
