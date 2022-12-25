<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dosis', function (Blueprint $table) {
            $table->id();
            $table->integer('dosis'); 
            $table->integer('edad_minima');
            $table->enum('tipo',['Años','Meses'])->nullable(); 
            
            $table->unsignedBigInteger('vacuna_id');
            $table->foreign('vacuna_id')->references('id')->on('vacuna')->onDelete('cascade');
            
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
        Schema::dropIfExists('dosis');
    }
}
