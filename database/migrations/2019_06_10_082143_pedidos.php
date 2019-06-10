<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Pedidos.
 *
 * @author  The scaffold-interface created at 2019-06-10 08:21:43pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Pedidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('pedidos',function (Blueprint $table){

        $table->increments('id');
        
        $table->biginteger('codigo');
        
        $table->date('emissao');
        
        $table->date('processamento');
        
        $table->String('observacao');
        
        /**
         * Foreignkeys section
         */
        
        $table->integer('cliente_id')->unsigned()->nullable();
        $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
        
        $table->integer('filial_id')->unsigned()->nullable();
        $table->foreign('filial_id')->references('id')->on('filials')->onDelete('cascade');
        
        
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
        Schema::drop('pedidos');
    }
}
