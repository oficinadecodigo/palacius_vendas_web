<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Condicao_pagamentos.
 *
 * @author  The scaffold-interface created at 2019-06-10 08:19:37pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class CondicaoPagamentos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('condicao_pagamentos',function (Blueprint $table){

        $table->increments('id');
        
        $table->biginteger('codigo');
        
        $table->String('prazos');
        
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
        Schema::drop('condicao_pagamentos');
    }
}
