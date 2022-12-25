<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonaDosisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona_dosis', function (Blueprint $table) {
            $table->id();
            $table->integer('numero_Documento')->unique(); 
            $table->string('nombre', 300)->nullable();
            $table->string('dosis')->nullable();  
            $table->date('fecha_aplicacion')->nullable();

            $table->unsignedBigInteger('persona_id');
            $table->foreign('persona_id')->references('id')->on('persona')->onDelete('cascade');

            $table->unsignedBigInteger('dosis_id');
            $table->foreign('dosis_id')->references('id')->on('dosis')->onDelete('cascade');

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
        Schema::dropIfExists('persona_dosis');
    }
}
