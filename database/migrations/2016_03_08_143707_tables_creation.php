<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablesCreation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*Schema::create('perfil', function(Blueprint $table){
            $table->increments('id');
            $table->string('perfil_nome')->unique();
        });*/

        /*Schema::create('usuario', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_perfil')->unsigned();
            $table->foreign('id_perfil')->references('id')->on('perfil')->onDelete('cascade');
            $table->string('nome');
            $table->string('login')->unique();
            $table->string('senha');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('materia', function(Blueprint $table){
            $table->increments('id');
            $table->string('nome')->unique();
            $table->text('img');
            $table->string('url');
        });

        Schema::create('atividade', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_materia')->unsigned();
            $table->foreign('id_materia')->references('id')->on('materia')->onDelete('cascade');
            $table->string('nome');
            $table->text('img');
        });

        Schema::create('subatividade', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_atividade')->unsigned();
            $table->foreign('id_atividade')->references('id')->on('atividade')->onDelete('cascade');
            $table->string('nome');
        });

        Schema::create('desempenho', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_subatividade')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('perfil')->onDelete('cascade');
            $table->foreign('id_subatividade')->references('id')->on('atividade')->onDelete('cascade');
            $table->integer('erros');
            $table->integer('acertos');
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('desempenho');
        Schema::drop('subatividade');
        Schema::drop('atividade');
        Schema::drop('materia');
        Schema::drop('usuario');
        Schema::drop('perfil');
    }
}
