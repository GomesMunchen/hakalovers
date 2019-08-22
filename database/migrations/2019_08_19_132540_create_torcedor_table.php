<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTorcedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
          Schema::create('torcedor', function (Blueprint $table) {
              $table->bigIncrements('id');
              $table->string('nome', 100);
              $table->string('documento', 14);
              $table->string('cep', 10);
              $table->string('endereco', 250);
              $table->string('bairro', 100);
              $table->string('cidade',100);
              $table->char('uf', 2);
              $table->string('telefone', 15);
              $table->string('email', 200);
              $table->boolean('ativo');
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
        Schema::dropIfExists('torcedor');
    }
}
