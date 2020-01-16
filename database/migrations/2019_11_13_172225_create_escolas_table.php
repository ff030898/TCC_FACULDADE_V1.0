<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEscolasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escolas', function (Blueprint $table) {

            $table->bigIncrements('id_escola');
            $table->string('nm_escola',100);
            $table->string('desc_escola',100);
            $table->string('img_escola',50);
            $table->string('cnpj_escola',20);
            $table->string('cep_escola',20);
            $table->string('cid_escola',50);
            $table->string('bairro_escola',50);
            $table->string('end_escola',100);
            $table->integer('num_escola');
            $table->string('ref_escola',50);
            $table->string('tipo_escola',15);
            $table->string('email_escola',100);
            $table->string('senha_escola',8);
            $table->string('tel_escola',15);
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
        Schema::dropIfExists('escolas');
    }
}
