<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Clientes.
 *
 * @author  The scaffold-interface created at 2019-06-10 08:05:35pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Clientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('clientes',function (Blueprint $table){

        $table->increments('id');
        
        $table->biginteger('codigo');
        
        $table->String('nome');
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('empresa_id')->unsigned()->nullable();
        $table->foreign('empresa_id')->references('id')->on('empresas')->onDelete('cascade');
        
        
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
        Schema::drop('clientes');
    }
}
