<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDatosPersonalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        $this->down();
        Schema::create('datos_personales', function (Blueprint $table) {
            $table->increments('ID');
            $table->char('TipoIdentificacion', 3);
            $table->text('Identificacion');
            $table->text('Nombres');
            $table->text('Apellidos');
            $table->string('Email')->unique();
            $table->longText('Direccion');
            $table->text('PathCurricullum');
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
        Schema::dropIfExists('datos_personales');
    }
}
