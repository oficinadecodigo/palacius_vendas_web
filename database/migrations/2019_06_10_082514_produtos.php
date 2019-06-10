<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Produtos.
 *
 * @author  The scaffold-interface created at 2019-06-10 08:25:14pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Produtos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('produtos',function (Blueprint $table){

        $table->increments('id');
        
        $table->biginteger('codigo');
        
        $table->String('descricao');
        
        $table->String('unidade_medida');
        
        /**
         * Foreignkeys section
         */
        
        
        $table->timestamps();
        
        
        $table->softDeletes();
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('produtos');
    }
}
