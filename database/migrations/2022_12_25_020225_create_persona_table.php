<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->id(); 
            $table->char('tipo_Documento'); 
            $table->integer('numero_Documento')->unique(); 
            $table->string('primer_nombre', 100)->nullable(); 
            $table->string('segundo_nombre', 100); 
            $table->string('primer_apellido', 100)->nullable(); 
            $table->string('segundo_apellido', 100); 
            $table->enum('sexo',['Masculino','Femenino'])->nullable(); 
            $table->string('email')->nullable(); 
            $table->integer('celular')->nullable(); 
            $table->string('direccion')->nullable(); 
            $table->string('lugar_naciminto', 200)->nullable(); 
            $table->date('fecha_nacimiento')->nullable(); 
            $table->integer('edad'); 
            $table->enum('estado',['Gestante','NoGestante','NoAplica'])->nullable();
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
        Schema::dropIfExists('persona');
    }
}
