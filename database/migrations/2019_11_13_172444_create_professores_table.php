<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professores', function (Blueprint $table) {
            $table->bigIncrements('id_prof');
            $table->string('nm_prof',50);
            $table->string('snm_prof',50);
            $table->string('cpf_prof',15);
            $table->string('rg_prof',11);
            $table->string('sexo_prof',15);
            $table->date('dt_nascimento');
            $table->string('img_prof',50);
            $table->string('cel_prof',15);
            $table->string('email_prof',70);
            $table->string('senha_prof',8);
            $table->integer('fk_cd_escola_P');
            //$table->foreign('fk_cd_escola_P')->references('id_escola')->on('escolas');
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
        Schema::dropIfExists('professores');
    }
}
