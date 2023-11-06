<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbMunicipiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_municipios', function (Blueprint $table) {
            $table->id('id_municipios');
            $table->string('cp');
            $table->string('nombre');
            $table->unsignedBigInteger('id_estado');
            $table->timestamps();
            //foreign Key
            $table->foreign('id_estado')->references('id_estados')->on('tb_estados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_municipios');
    }
}
