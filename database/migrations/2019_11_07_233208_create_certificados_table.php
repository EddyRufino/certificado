<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certificados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->integer('numCertificado');
            $table->string('nombreComercial', 200);
            $table->string('ubicacion', 200);
            $table->string('propietario', 200);
            $table->integer('capacidadNum');
            $table->string('capacidadLetra', 200);
            $table->string('actividad', 200);
            $table->string('numExpediente', 200);
            $table->string('numResolucion', 200);
            $table->unsignedInteger('riesgo_id');
            $table->date('fechaExpedicion');
            $table->date('fechaExpediente');
            $table->date('fechaCaducidad');
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
        Schema::dropIfExists('certificados');
    }
}
