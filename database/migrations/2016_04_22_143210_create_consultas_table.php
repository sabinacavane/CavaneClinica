<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nomePaciente');
            $table->string('apelidoPaciente');
            $table->date('dataNascimentoPaciente');
            $table->string('telefonePaciente');
            $table->string('emailPaciente');
            $table->string('especialidadeConsulta');
            $table->date('dataConsulta');
            $table->time('horaConsulta');
            $table->string('nomeMedico');
            $table->integer('medicos_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('consultas');
    }
}
