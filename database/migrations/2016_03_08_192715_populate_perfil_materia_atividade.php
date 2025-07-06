<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Migrations\Migration;

class PopulatePerfilMateriaAtividade extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Populate perfil
         */
        /*$data = array(
            array('perfil_nome' => 'Administrador'),
            array('perfil_nome' => 'Aluno'),
            array('perfil_nome' => 'Professor')
        );

        DB::table('perfil')->insert($data);*/

        /**
         * Populate usuario
         */
        /*$data = array(
            array('id_perfil' => 7),
            array('nome' => 'Teste Ong'),
            array('login' => 'TesteOng'),
            array('senha' => Hash::make('@inicial1'))
        );

        DB::table('usuario')->insert($data);*/

        /**
         * Populate Materia
         */
        $data = array(
            array('nome' => 'Matemática', 'img' => '/assets/img/matematica.png'),
            array('nome' => 'Português', 'img' => '/assets/img/portugues.png'),
        );

        DB::table('materia')->insert($data);

        /**
         * Populate Atividade
         */
        $data = array(
            array('id_materia' => 1, 'nome' => 'Números Iguais', 'img' => 'numeros-iguais.png'),
            array('id_materia' => 1, 'nome' => 'Quantidade Certa', 'img' => '/assets/img/quantidade-certa.png'),
            array('id_materia' => 1, 'nome' => 'Somas', 'img' => '/assets/img/somas.png'),
            array('id_materia' => 2, 'nome' => 'Ache o Objeto', 'img' => '/assets/img/ache-objeto.png'),
            array('id_materia' => 2, 'nome' => 'Complete e Copie', 'img' => '/assets/img/complete-copie.png'),
            array('id_materia' => 2, 'nome' => 'Maculino e Feminino', 'img' => '/assets/img/masc-fem.png'),
            array('id_materia' => 2, 'nome' => 'Singular e Plural', 'img' => '/assets/img/sing-plur.png'),
            array('id_materia' => 2, 'nome' => 'Substantivos', 'img' => '/assets/img/substantivos.png')
        );

        DB::table('atividade')->insert($data);

        /**
         * Populate SubAtividade
         */
        $data = array(
            array('id_atividade' => 1, 'nome' => 'Procure os números iguais:'),
            array('id_atividade' => 2, 'nome' => 'Ligue a figura à quantidade certa:'),
            array('id_atividade' => 3, 'nome' => 'Resolva as somas:'),
            array('id_atividade' => 4, 'nome' => 'Encontre os objetos que comecem com a vogal A:'),
            array('id_atividade' => 4, 'nome' => 'Encontre os objetos que comecem com a vogal E:'),
            array('id_atividade' => 4, 'nome' => 'Encontre os objetos que comecem com a vogal I:'),
            array('id_atividade' => 4, 'nome' => 'Encontre os objetos que comecem com a vogal O:'),
            array('id_atividade' => 4, 'nome' => 'Encontre os objetos que comecem com a vogal U:'),
            array('id_atividade' => 5, 'nome' => 'Complete com a vogal A e copie as palavras:'),
            array('id_atividade' => 5, 'nome' => 'Complete com a vogal E e copie as palavras:'),
            array('id_atividade' => 5, 'nome' => 'Complete com a vogal I e copie as palavras:'),
            array('id_atividade' => 5, 'nome' => 'Complete com a vogal O e copie as palavras:'),
            array('id_atividade' => 5, 'nome' => 'Complete com a vogal U e copie as palavras:'),
            array('id_atividade' => 6, 'nome' => 'Observe as palavras e numere o masculino com o feminino:'),
            array('id_atividade' => 7, 'nome' => 'Reescreva a frase trocando as figuras pelo seu plural:'),
            array('id_atividade' => 7, 'nome' => 'Reescreva as figuras da atividade anterior no singular:'),
            array('id_atividade' => 8, 'nome' => 'Separe os substantivos comuns dos próprios:')
        );

        DB::table('subatividade')->insert($data);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('usuario')->delete();
        DB::table('atividade')->delete();
        DB::table('materia')->delete();
        DB::table('perfil')->delete();
    }
}
